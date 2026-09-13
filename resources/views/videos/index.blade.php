{{-- resources/views/videos/index.blade.php --}}
{{-- صفحة قائمة الفيديوهات المرفوعة --}}

@extends('layouts.app')

@section('title', 'الفيديوهات التعليمية | THE OCEAN SERIES')

@section('content')
<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#c5e0ff] via-[#d4eaff] to-[#e5f2ff]">

    {{-- ============================================= --}}
    {{-- عناصر زخرفية خلفية --}}
    {{-- ============================================= --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#7cb7ff]/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#7cb7ff]/10 rounded-full blur-3xl animate-float animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#7cb7ff]/5 rounded-full blur-3xl animate-float animation-delay-4000"></div>
    </div>

    {{-- ============================================= --}}
    {{-- المحتوى الرئيسي --}}
    {{-- ============================================= --}}
    <div class="relative z-10 container mx-auto px-4 py-8 md:py-12">

        {{-- ===== العنوان ===== --}}
        <div class="text-center mb-10 fade-up">
            <span class="inline-block px-5 py-2.5 mb-3 text-sm font-bold text-[#062f47] bg-white/80 backdrop-blur-sm border border-[#062f47]/15 rounded-full shadow-lg shadow-[#062f47]/10">
                🎥 المكتبة التعليمية
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#062f47] drop-shadow-sm">
                قائمة <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#062f47] to-[#2a6b9e]">الفيديوهات</span>
            </h1>
            <p class="mt-2 text-[#1a3a5c]/70 text-sm md:text-base font-medium">
                استعرض جميع الفيديوهات التعليمية المرفوعة على المنصة
            </p>
        </div>

        {{-- ===== زر رفع فيديو جديد + عدد الفيديوهات ===== --}}
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8 fade-up">
            <div class="flex items-center gap-3 bg-white/60 backdrop-blur-sm px-4 py-2 rounded-xl border border-[#062f47]/10">
                <span class="text-2xl">📊</span>
                <div>
                    <p class="text-xs text-[#062f47]/60">إجمالي الفيديوهات</p>
                    <p class="font-bold text-[#062f47] text-lg">{{ $videos->total() }}</p>
                </div>
            </div>
            <a href="{{ route('videos.create') }}" 
               class="inline-flex items-center gap-2.5 bg-gradient-to-r from-[#f6c951] via-[#fbbf24] to-[#f59e0b] hover:from-[#f59e0b] hover:via-[#f6c951] hover:to-[#fbbf24] text-[#062f47] font-extrabold px-6 py-3.5 rounded-xl shadow-gold hover:shadow-2xl hover:shadow-[#f6c951]/40 hover:-translate-y-1 transition-all duration-300 border border-white/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
                ➕ رفع فيديو جديد
            </a>
        </div>

        {{-- ===== رسائل النجاح والخطأ ===== --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-300 rounded-xl text-green-800 flex items-center gap-3 fade-up shadow-sm">
                <span class="text-2xl">✅</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 p-4 bg-red-100 border border-red-300 rounded-xl text-red-800 flex items-center gap-3 fade-up shadow-sm">
                <span class="text-2xl">❌</span>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        {{-- ===== قائمة الفيديوهات ===== --}}
        @if($videos->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach($videos as $video)
                    <div class="group relative bg-white/70 backdrop-blur-md rounded-2xl shadow-light hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-white/50 fade-up">
                        
                        {{-- ============================================= --}}
{{-- ✅ أزرار التحكم العائمة --}}
{{-- على الموبايل: تظهر دائماً | على الكمبيوتر: عند hover --}}
{{-- ============================================= --}}
<div class="absolute top-3 right-3 z-30 flex gap-2 transition-all duration-300 md:opacity-0 md:group-hover:opacity-100 md:translate-y-2 md:group-hover:translate-y-0">
    
    {{-- زر الحذف --}}
    <form action="{{ route('videos.destroy', $video->id) }}" 
          method="POST" 
          onsubmit="return confirm('⚠️ هل أنت متأكد من حذف الفيديو؟\n\n{{ addslashes($video->title) }}')"
          class="inline-block m-0">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="w-10 h-10 flex items-center justify-center bg-red-500 hover:bg-red-600 active:bg-red-700 text-white rounded-full shadow-lg hover:scale-110 active:scale-95 transition-all duration-200 backdrop-blur-sm cursor-pointer"
                title="حذف الفيديو"
                aria-label="حذف الفيديو">
            <svg class="w-4 h-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
        </button>
    </form>

    {{-- زر المشاهدة السريعة --}}
    <a href="{{ route('videos.show', $video->id) }}"
       class="w-10 h-10 flex items-center justify-center bg-[#062f47] hover:bg-[#0a3d5c] text-white rounded-full shadow-lg hover:scale-110 active:scale-95 transition-all duration-200 backdrop-blur-sm cursor-pointer"
       title="مشاهدة سريعة"
       aria-label="مشاهدة سريعة">
        <svg class="w-4 h-4 pointer-events-none" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8 5v14l11-7z"/>
        </svg>
    </a>

                        </div>
                        
                        {{-- ===== صورة الغلاف (Thumbnail) ===== --}}
                        <div class="relative aspect-video bg-[#062f47]/10 overflow-hidden">
                            @if($video->video_url)
                                <video class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" muted>
                                    <source src="{{ $video->video_url }}" type="{{ $video->mime_type ?? 'video/mp4' }}">
                                </video>
                            @else
                                <div class="w-full h-full flex items-center justify-center text-6xl text-[#062f47]/20">
                                    <i class="fa-solid fa-video"></i>
                                </div>
                            @endif
                            
                            {{-- ===== شارة المدة (إن وجدت) ===== --}}
                            @if($video->duration)
                                <div class="absolute bottom-2 right-2 bg-[#062f47]/80 backdrop-blur-sm text-white text-xs font-bold px-2 py-1 rounded">
                                    {{ $video->duration }}
                                </div>
                            @endif

                            {{-- ✅ شارة "جديد" إذا كان الفيديو أُضيف خلال 3 أيام --}}
                            @if($video->created_at->diffInDays(now()) <= 3)
                                <div class="absolute top-3 left-3 bg-gradient-to-r from-[#f6c951] to-[#f59e0b] text-[#062f47] text-xs font-extrabold px-2.5 py-1 rounded-full shadow-lg">
                                    ✨ جديد
                                </div>
                            @endif
                        </div>

                        {{-- ===== معلومات الفيديو ===== --}}
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-[#062f47] line-clamp-1 group-hover:text-[#f6c951] transition-colors">
                                {{ $video->title }}
                            </h3>
                            
                            <p class="text-[#062f47]/60 text-sm line-clamp-2 mt-1">
                                {{ $video->description ?? 'لا يوجد وصف' }}
                            </p>

                            <div class="flex flex-wrap items-center justify-between mt-3 text-xs text-[#062f47]/50">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-user-graduate"></i>
                                    <span>{{ $video->teacher_name ?? 'غير محدد' }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <span>{{ $video->level ?? 'عام' }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>{{ $video->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>

                            {{-- ===== زر المشاهدة ===== --}}
                            <a href="{{ route('videos.show', $video->id) }}" 
                               class="mt-4 w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#062f47] to-[#0a3d5c] hover:from-[#0a3d5c] hover:to-[#062f47] text-white font-bold px-4 py-2.5 rounded-xl transition-all duration-300 hover:-translate-y-0.5 shadow-md hover:shadow-lg">
                                <i class="fa-solid fa-play"></i>
                                مشاهدة الفيديو
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- ===== ترقيم الصفحات (Pagination) ===== --}}
            @if($videos->hasPages())
                <div class="mt-10 flex justify-center fade-up">
                    {{ $videos->links() }}
                </div>
            @endif

        @else
            {{-- ===== لا توجد فيديوهات ===== --}}
            <div class="text-center py-16 fade-up">
                <div class="text-7xl mb-4 text-[#062f47]/20">
                    <i class="fa-solid fa-video-slash"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#062f47] mb-2">لا توجد فيديوهات</h3>
                <p class="text-[#062f47]/60">لم يتم رفع أي فيديو بعد. كن أول من يضيف محتوى تعليمي!</p>
                <a href="{{ route('videos.create') }}" 
                   class="inline-flex items-center gap-2 mt-6 bg-gradient-to-r from-[#f6c951] to-yellow-400 text-[#062f47] font-bold px-6 py-3 rounded-full hover:shadow-lg hover:shadow-[#f6c951]/30 transition-all duration-300 hover:-translate-y-1">
                    ➕ رفع فيديو جديد
                </a>
            </div>
        @endif

    </div>
</div>

{{-- ============================================= --}}
{{-- CSS إضافي محلي --}}
{{-- ============================================= --}}
<style>
    .shadow-gold {
        box-shadow: 0 4px 20px rgba(246, 201, 81, 0.3);
    }
    .shadow-gold:hover {
        box-shadow: 0 8px 35px rgba(246, 201, 81, 0.5);
    }
    .shadow-light {
        box-shadow: 0 2px 10px rgba(6, 47, 71, 0.08);
    }

    @keyframes float-anim {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -20px) scale(1.05); }
        66% { transform: translate(-20px, 15px) scale(0.95); }
    }
    .animate-float {
        animation: float-anim 10s ease-in-out infinite;
    }

    /* ===== تحسين الترقيم ===== */
    .pagination {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    .pagination .page-item { display: inline-block; }
    .pagination .page-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 2.5rem;
        height: 2.5rem;
        padding: 0 0.75rem;
        border-radius: 0.5rem;
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(8px);
        color: #062f47;
        font-weight: 500;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }
    .pagination .page-link:hover {
        background: #f6c951;
        color: #062f47;
        border-color: #f6c951;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(246, 201, 81, 0.3);
    }
    .pagination .active .page-link {
        background: #f6c951;
        color: #062f47;
        border-color: #f6c951;
        box-shadow: 0 4px 15px rgba(246, 201, 81, 0.3);
    }
    .pagination .disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
    }

    @media (max-width: 640px) {
        .pagination .page-link {
            min-width: 2rem;
            height: 2rem;
            font-size: 0.8rem;
        }
    }
</style>
@endsection