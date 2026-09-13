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

        {{-- ===== شريط التنقل العلوي ===== --}}
        <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
            <a href="{{ route('videos.index') }}" class="inline-flex items-center gap-2 text-[#062f47]/70 hover:text-[#f6c951] transition-colors font-semibold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
                العودة إلى القائمة
            </a>

            {{-- أزرار التحكم (حذف) --}}
            @auth
            <div class="flex items-center gap-2">
                <form action="{{ route('videos.destroy', $video->id) }}" 
                      method="POST" 
                      onsubmit="return confirm('⚠️ هل أنت متأكد من حذف هذا الفيديو؟\n\nلا يمكن التراجع عن هذه العملية.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="inline-flex items-center gap-2 px-4 py-2 bg-red-500/10 hover:bg-red-500 text-red-600 hover:text-white text-sm font-bold rounded-xl border border-red-500/30 hover:border-red-500 transition-all duration-300 hover:-translate-y-0.5 shadow-sm hover:shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        حذف الفيديو
                    </button>
                </form>
            </div>
            @endauth
        </div>

        {{-- ===== الفيديو ===== --}}
        <div class="bg-white/70 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden border border-white/50 fade-up">
            <div class="aspect-video bg-black/5">
                <video controls class="w-full h-full" controlsList="nodownload" poster="">
                    <source src="{{ $video->video_url }}" type="{{ $video->mime_type ?? 'video/mp4' }}">
                    متصفحك لا يدعم تشغيل الفيديو.
                </video>
            </div>

            {{-- ===== معلومات الفيديو ===== --}}
            <div class="p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-[#062f47]">{{ $video->title }}</h1>
                <p class="text-[#062f47]/70 mt-3 text-lg leading-relaxed">{{ $video->description ?? 'لا يوجد وصف لهذا الفيديو.' }}</p>

                {{-- شارات المعلومات --}}
                <div class="flex flex-wrap gap-3 mt-5">
                    <span class="inline-flex items-center gap-2 bg-[#f6c951]/15 text-[#062f47] px-4 py-2 rounded-full text-sm font-semibold border border-[#f6c951]/30">
                        <i class="fa-solid fa-user-graduate text-[#f6c951]"></i>
                        {{ $video->teacher_name ?? 'غير محدد' }}
                    </span>
                    <span class="inline-flex items-center gap-2 bg-[#062f47]/10 text-[#062f47] px-4 py-2 rounded-full text-sm font-semibold border border-[#062f47]/20">
                        <i class="fa-solid fa-layer-group text-[#062f47]"></i>
                        {{ $video->level ?? 'عام' }}
                    </span>
                    <span class="inline-flex items-center gap-2 bg-[#062f47]/10 text-[#062f47] px-4 py-2 rounded-full text-sm font-semibold border border-[#062f47]/20">
                        <i class="fa-regular fa-calendar text-[#062f47]"></i>
                        {{ $video->created_at->format('d/m/Y') }}
                    </span>
                </div>
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