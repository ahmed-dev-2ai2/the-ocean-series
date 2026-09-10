<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'video'       => 'required|file|mimes:mp4,mov,ogg,qt,webm,mkv,avi|max:512000',
        ]);

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $disk = config('filesystems.default', 'public');

            $path = $file->store('videos', $disk);

            if ($disk === 'public') {
                $videoUrl = Storage::disk('public')->url($path);
            } elseif ($disk === 'r2') {
                $videoUrl = Storage::disk('r2')->url($path);
            } else {
                $videoUrl = Storage::disk($disk)->url($path);
            }

            Video::create([
                'title'       => $request->title,
                'description' => $request->description,
                'video_path'  => $path,
                'video_url'   => $videoUrl,
                'video_disk'  => $disk,
                'mime_type'   => $file->getClientMimeType(),
                'file_size'   => $file->getSize(),
                'status'      => 'active',
                'level'       => $request->level,
                'teacher_name' => $request->teacher_name,
            ]);

            return redirect()->route('videos.index')
                ->with('success', '✅ تم رفع الفيديو بنجاح!');
        }

        return back()->with('error', '❌ حدث خطأ أثناء رفع الفيديو.');
    }

    // 🔥 هذه الدالة الجديدة (المفقودة) لعرض الفيديو
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.show', compact('video'));
    }

    public function destroy(Video $video)
    {
        if ($video->video_path && Storage::disk($video->video_disk ?? 'public')->exists($video->video_path)) {
            Storage::disk($video->video_disk ?? 'public')->delete($video->video_path);
        }

        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', '✅ تم حذف الفيديو بنجاح.');
    }
}