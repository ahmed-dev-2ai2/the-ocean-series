{{-- resources/views/videos/create.blade.php --}}
{{-- صفحة رفع فيديو جديد – تصميم احترافي مع خلفية زرقاء ولمسات جمالية --}}

@extends('layouts.app')

@section('title', 'رفع فيديو جديد | THE OCEAN SERIES')

@section('content')
<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#c5e0ff] via-[#d4eaff] to-[#e5f2ff]">

    {{-- ============================================= --}}
    {{-- عناصر زخرفية خلفية (دائرية متحركة) --}}
    {{-- ============================================= --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#7cb7ff]/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#7cb7ff]/10 rounded-full blur-3xl animate-float animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#7cb7ff]/5 rounded-full blur-3xl animate-float animation-delay-4000"></div>
    </div>

    {{-- ============================================= --}}
    {{-- المحتوى الرئيسي --}}
    {{-- ============================================= --}}
    <div class="relative z-10 container mx-auto px-4 py-8 md:py-12 max-w-3xl">

        {{-- ===== عنوان الصفحة (محسّن) ===== --}}
        <div class="text-center mb-10 fade-up">
            {{-- 🟡 زر/شارة "إضافة محتوى جديد" مع توهج وحركة نبض --}}
            <span 
                class="inline-block px-5 py-2.5 mb-3 text-sm font-bold text-[#062f47] bg-white/80 backdrop-blur-sm border border-[#062f47]/15 rounded-full shadow-lg shadow-[#062f47]/10 transition-all duration-300 hover:scale-105 hover:shadow-[#062f47]/20 animate-pulse-glow"
            >
                🎥 إضافة محتوى جديد
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#062f47] drop-shadow-sm">
                رفع <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#062f47] to-[#2a6b9e]">فيديو</span> جديد
            </h1>
            <p class="mt-2 text-[#1a3a5c]/70 text-sm md:text-base font-medium">
                أضف فيديو تعليمياً جديداً إلى مكتبة المنصة
            </p>
        </div>

        {{-- ===== رسائل النجاح والخطأ ===== --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-300 rounded-xl text-green-800 flex items-center gap-3 fade-up shadow-sm">
                <span class="text-2xl">✅</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-300 rounded-xl text-red-800 flex items-start gap-3 fade-up shadow-sm">
                <span class="text-2xl">⚠️</span>
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- ===== نموذج الرفع ===== --}}
        <form 
            action="{{ route('videos.store') }}" 
            method="POST" 
            enctype="multipart/form-data" 
            class="relative bg-white/70 backdrop-blur-md rounded-2xl shadow-xl border border-white/50 p-6 md:p-8 fade-up"
            id="upload-form"
        >
            @csrf

            {{-- ===== 1. عنوان الفيديو ===== --}}
            <div class="mb-6">
                <label for="title" class="block text-sm font-semibold text-[#062f47] mb-2">
                    <i class="fa-solid fa-heading text-[#f6c951] ml-2"></i>
                    عنوان الفيديو <span class="text-[#f6c951]">*</span>
                </label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title') }}"
                    class="w-full px-5 py-3.5 bg-white/60 backdrop-blur-sm rounded-xl text-[#062f47] placeholder-[#062f47]/40 border border-[#062f47]/20 focus:border-[#f6c951] focus:ring-2 focus:ring-[#f6c951]/30 focus:outline-none transition-all duration-300"
                    placeholder="مثال: شرح الدرس الأول – القواعد الأساسية"
                    required
                >
            </div>

            {{-- ===== 2. رفع الملف (Drag & Drop) ===== --}}
            <div class="mb-6">
                <label class="block text-sm font-semibold text-[#062f47] mb-2">
                    <i class="fa-solid fa-cloud-upload-alt text-[#f6c951] ml-2"></i>
                    ملف الفيديو <span class="text-[#f6c951]">*</span>
                </label>
                
                {{-- منطقة السحب والإفلات --}}
                <div 
                    id="drop-zone"
                    class="relative w-full p-8 bg-white/40 backdrop-blur-sm border-2 border-dashed border-[#062f47]/20 rounded-xl hover:border-[#f6c951] transition-all duration-300 cursor-pointer group"
                >
                    <input 
                        type="file" 
                        id="video" 
                        name="video" 
                        accept="video/*" 
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                        required
                    >
                    
                    <div class="flex flex-col items-center justify-center text-center pointer-events-none">
                        <div class="w-20 h-20 mb-4 bg-[#f6c951]/20 rounded-full flex items-center justify-center text-4xl text-[#f6c951] group-hover:scale-110 group-hover:bg-[#f6c951]/30 transition-all duration-300 shadow-glow">
                            <i class="fa-solid fa-film"></i>
                        </div>
                        <p class="text-[#062f47] font-semibold text-lg">
                            اسحب ملف الفيديو هنا أو <span class="text-[#f6c951] hover:text-yellow-500 transition-colors">اضغط للاختيار</span>
                        </p>
                        <p class="text-[#062f47]/60 text-sm mt-1">
                            الصيغ المدعومة: MP4, MOV, AVI, WMV, FLV, WebM (حتى 500 ميجابايت)
                        </p>
                        
                        {{-- عرض اسم الملف وحجمه بعد الاختيار --}}
                        <div id="file-info" class="hidden mt-4 w-full max-w-sm p-3 bg-white/80 backdrop-blur-sm rounded-lg border border-[#062f47]/10">
                            <div class="flex items-center gap-3">
                                <span class="text-2xl text-[#f6c951]">📹</span>
                                <div class="flex-1 text-right">
                                    <p id="file-name" class="text-[#062f47] font-medium text-sm truncate">video.mp4</p>
                                    <p id="file-size" class="text-[#062f47]/60 text-xs">0 MB</p>
                                </div>
                                <span class="text-green-600 text-xl">✅</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===== 3. وصف الفيديو ===== --}}
            <div class="mb-6">
                <label for="description" class="block text-sm font-semibold text-[#062f47] mb-2">
                    <i class="fa-solid fa-align-left text-[#f6c951] ml-2"></i>
                    وصف الفيديو (اختياري)
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4"
                    class="w-full px-5 py-3.5 bg-white/60 backdrop-blur-sm rounded-xl text-[#062f47] placeholder-[#062f47]/40 border border-[#062f47]/20 focus:border-[#f6c951] focus:ring-2 focus:ring-[#f6c951]/30 focus:outline-none transition-all duration-300 resize-none"
                    placeholder="اكتب وصفاً مختصراً للفيديو..."
                >{{ old('description') }}</textarea>
            </div>

            {{-- ===== 4. المستوى واسم المعلم ===== --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="level" class="block text-sm font-semibold text-[#062f47] mb-2">
                        <i class="fa-solid fa-layer-group text-[#f6c951] ml-2"></i>
                        المستوى (اختياري)
                    </label>
                    <input 
                        type="text" 
                        id="level" 
                        name="level" 
                        value="{{ old('level') }}"
                        class="w-full px-5 py-3.5 bg-white/60 backdrop-blur-sm rounded-xl text-[#062f47] placeholder-[#062f47]/40 border border-[#062f47]/20 focus:border-[#f6c951] focus:ring-2 focus:ring-[#f6c951]/30 focus:outline-none transition-all duration-300"
                        placeholder="مبتدئ / متوسط / متقدم"
                    >
                </div>
                <div>
                    <label for="teacher_name" class="block text-sm font-semibold text-[#062f47] mb-2">
                        <i class="fa-solid fa-user-graduate text-[#f6c951] ml-2"></i>
                        اسم المعلم (اختياري)
                    </label>
                    <input 
                        type="text" 
                        id="teacher_name" 
                        name="teacher_name" 
                        value="{{ old('teacher_name') }}"
                        class="w-full px-5 py-3.5 bg-white/60 backdrop-blur-sm rounded-xl text-[#062f47] placeholder-[#062f47]/40 border border-[#062f47]/20 focus:border-[#f6c951] focus:ring-2 focus:ring-[#f6c951]/30 focus:outline-none transition-all duration-300"
                        placeholder="مثال: أ. عبدالسلام رضوان"
                    >
                </div>
            </div>

            {{-- ===== 5. زر الرفع ===== --}}
            <button 
                type="submit" 
                class="w-full inline-flex items-center justify-center gap-3 px-6 py-4 bg-gradient-to-r from-[#f6c951] via-[#fbbf24] to-[#f59e0b] hover:from-[#f59e0b] hover:via-[#f6c951] hover:to-[#fbbf24] text-[#062f47] font-extrabold text-lg rounded-xl shadow-lg shadow-[#f6c951]/30 hover:shadow-[#f6c951]/50 hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-[#f6c951]/50 border border-white/20"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                </svg>
                <span>🚀 رفع الفيديو إلى المنصة</span>
            </button>

            {{-- ===== 6. رابط العودة ===== --}}
            <div class="mt-6 text-center">
                <a href="{{ route('videos.index') }}" class="inline-flex items-center gap-2 text-[#062f47]/60 hover:text-[#f6c951] transition-colors duration-300 text-sm hover:scale-105 transform">
                    <i class="fa-solid fa-arrow-right"></i>
                    العودة إلى قائمة الفيديوهات
                </a>
            </div>

        </form>
    </div>
</div>

{{-- ============================================= --}}
{{-- JavaScript لتحسين تجربة رفع الملف --}}
{{-- ============================================= --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('video');
        const dropZone = document.getElementById('drop-zone');
        const fileInfo = document.getElementById('file-info');
        const fileName = document.getElementById('file-name');
        const fileSize = document.getElementById('file-size');

        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                fileInfo.classList.remove('hidden');
                fileName.textContent = file.name;
                const sizeInMB = (file.size / (1024 * 1024)).toFixed(2);
                fileSize.textContent = sizeInMB + ' ميجابايت';
            } else {
                fileInfo.classList.add('hidden');
            }
        });

        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('border-[#f6c951]', 'bg-[#f6c951]/10');
        });

        dropZone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('border-[#f6c951]', 'bg-[#f6c951]/10');
        });

        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('border-[#f6c951]', 'bg-[#f6c951]/10');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                const event = new Event('change', { bubbles: true });
                fileInput.dispatchEvent(event);
            }
        });
    });
</script>

{{-- ============================================= --}}
{{-- CSS إضافي محلي --}}
{{-- ============================================= --}}
<style>
    /* ===== توهج وحركة نبض للشارة ===== */
    @keyframes pulse-glow {
        0%, 100% {
            box-shadow: 0 0 10px rgba(246, 201, 81, 0.3);
            transform: scale(1);
        }
        50% {
            box-shadow: 0 0 25px rgba(246, 201, 81, 0.6), 0 0 50px rgba(246, 201, 81, 0.2);
            transform: scale(1.02);
        }
    }
    .animate-pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
    }

    /* ===== ظل ذهبي ===== */
    .shadow-glow {
        box-shadow: 0 0 40px rgba(246, 201, 81, 0.15);
    }

    /* ===== حركة الطفو ===== */
    @keyframes float-anim {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -20px) scale(1.05); }
        66% { transform: translate(-20px, 15px) scale(0.95); }
    }
    .animate-float {
        animation: float-anim 10s ease-in-out infinite;
    }

    /* ===== تحسين الموبايل ===== */
    @media (max-width: 640px) {
        #drop-zone {
            padding: 1.5rem;
        }
        #drop-zone .w-20 {
            width: 4rem;
            height: 4rem;
            font-size: 2rem;
        }
        #drop-zone .text-lg {
            font-size: 1rem;
        }
        .p-6 {
            padding: 1.25rem;
        }
        .text-3xl {
            font-size: 1.75rem;
        }
    }
</style>
@endsection