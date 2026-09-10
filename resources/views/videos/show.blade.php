{{-- resources/views/videos/show.blade.php --}}

@extends('layouts.app')

@section('title', $video->title . ' | THE OCEAN SERIES')

@section('content')
<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#c5e0ff] via-[#d4eaff] to-[#e5f2ff]">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#7cb7ff]/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#7cb7ff]/10 rounded-full blur-3xl animate-float animation-delay-2000"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-8 md:py-12 max-w-4xl">

        <div class="mb-6">
            <a href="{{ route('videos.index') }}" class="inline-flex items-center gap-2 text-[#062f47]/70 hover:text-[#f6c951] transition-colors">
                <i class="fa-solid fa-arrow-right"></i>
                العودة إلى القائمة
            </a>
        </div>

        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden border border-white/50 fade-up">
            <div class="aspect-video bg-black/5">
                <video controls class="w-full h-full" controlsList="nodownload">
                    <source src="{{ $video->video_url }}" type="{{ $video->mime_type ?? 'video/mp4' }}">
                    متصفحك لا يدعم تشغيل الفيديو.
                </video>
            </div>

            <div class="p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-[#062f47]">{{ $video->title }}</h1>
                <p class="text-[#062f47]/70 mt-2 text-lg">{{ $video->description ?? 'لا يوجد وصف لهذا الفيديو.' }}</p>

                <div class="flex flex-wrap gap-4 mt-4 text-sm text-[#062f47]/60">
                    <span><i class="fa-solid fa-user-graduate ml-1"></i> {{ $video->teacher_name ?? 'غير محدد' }}</span>
                    <span><i class="fa-solid fa-layer-group ml-1"></i> {{ $video->level ?? 'عام' }}</span>
                    <span><i class="fa-regular fa-calendar ml-1"></i> {{ $video->created_at->format('d/m/Y') }}</span>
                </div>

                @auth
                <div class="mt-6 pt-4 border-t border-gray-200 flex justify-end">
                    <form action="{{ route('videos.destroy', $video->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا الفيديو؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-semibold transition-colors">
                            🗑️ حذف الفيديو
                        </button>
                    </form>
                </div>
                @endauth
            </div>
        </div>

    </div>
</div>

<style>
    @keyframes float-anim {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -20px) scale(1.05); }
        66% { transform: translate(-20px, 15px) scale(0.95); }
    }
    .animate-float {
        animation: float-anim 10s ease-in-out infinite;
    }
</style>
@endsection