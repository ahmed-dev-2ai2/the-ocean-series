{{-- resources/views/components/hero.blade.php --}}
<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-[#062f47] via-[#0a3d5c] to-[#101820] pt-8 md:pt-12">

    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-[#f6c951] rounded-full mix-blend-overlay filter blur-3xl animate-float"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-blue-500 rounded-full mix-blend-overlay filter blur-3xl animate-float"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl animate-float"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="text-center lg:text-right fade-up">
                <span class="inline-block px-4 py-2 mb-4 text-sm font-bold text-[#f6c951] bg-[#f6c951]/10 border border-[#f6c951]/30 rounded-full">
                    🌟 منصة تعليمية احترافية
                </span>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight break-words">
                    <span class="text-white">مرحبًا بك في</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#f6c951] to-yellow-400">
                        THE OCEAN SERIES
                    </span>
                </h1>

                <p class="mt-4 text-base sm:text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    ابدأ رحلتك نحو التفوق في اللغة الإنجليزية مع مستر عبدالسلام.
                    منصة تعليمية حديثة تجمع بين الشرح المبسط، والاختبارات، والمذكرات، والمتابعة المستمرة.
                </p>

                <blockquote class="mt-6 p-4 border-r-4 border-[#f6c951] bg-[#f6c951]/5 rounded-lg">
                    <p class="text-lg italic text-gray-200">"نحن لا نعلّم الإنجليزية فقط... بل نبني الثقة، ونصنع النجاح."</p>
                </blockquote>

                {{-- ============================================= --}}
                {{-- 🔥 الأزرار (بما فيها الزر الذهبي الجديد) --}}
                {{-- ============================================= --}}
                <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">

                    {{-- زر الحجز --}}
                    <a href="#booking" class="inline-flex items-center gap-2 px-6 py-3 sm:px-7 sm:py-3.5 bg-gradient-to-r from-[#f6c951] to-[#f59e0b] hover:from-[#f59e0b] hover:to-[#f6c951] text-[#062f47] font-bold rounded-full shadow-lg hover:shadow-2xl hover:shadow-[#f6c951]/40 hover:-translate-y-1 transition-all duration-300">
                        🚀 بادر بالحجز الآن
                    </a>

                    {{-- زر تعرف علينا --}}
                    <a href="#about" class="inline-flex items-center gap-2 px-6 py-3 sm:px-7 sm:py-3.5 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold rounded-full shadow-md hover:shadow-lg border-2 border-white/20 hover:border-[#f6c951] hover:-translate-y-1 transition-all duration-300">
                        👋 تعرف علينا
                    </a>

                    {{-- 🔥🔥 الزر الذهبي الجديد: إدارة الفيديوهات 🔥🔥 --}}
                    <a href="{{ route('videos.index') }}"
                       class="relative group inline-flex items-center gap-3 px-6 py-3 sm:px-7 sm:py-3.5 bg-gradient-to-r from-amber-400 via-yellow-500 to-amber-500 hover:from-yellow-500 hover:via-amber-400 hover:to-yellow-600 text-[#062f47] font-extrabold rounded-full shadow-[0_10px_30px_rgba(245,158,11,0.45)] hover:shadow-[0_15px_45px_rgba(245,158,11,0.65)] hover:-translate-y-1.5 hover:scale-[1.03] transition-all duration-300 border border-white/40 animate-pulse-glow">

                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>

                        <span>🎥 إدارة الفيديوهات</span>

                        {{-- نقطة وامضة للفت الانتباه --}}
                        <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-red-500 border-2 border-white"></span>
                        </span>
                    </a>
                </div>

                {{-- عدادات --}}
                <div class="mt-10 flex flex-wrap gap-8 justify-center lg:justify-start text-white">
                    <div class="text-center">
                        <span class="block text-3xl font-bold text-[#f6c951] counter" data-target="8000">0+</span>
                        <span class="text-sm text-gray-400">طالب مستفيد</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-3xl font-bold text-[#f6c951] counter" data-target="8">0+</span>
                        <span class="text-sm text-gray-400">سنوات خبرة</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-3xl font-bold text-[#f6c951] counter" data-target="150">0+</span>
                        <span class="text-sm text-gray-400">فيديو تعليمي</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-center fade-up">
                <div class="relative w-full max-w-md">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#f6c951] to-yellow-400 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                    <img src="{{ asset('assets/images/teacher/teacher4.png') }}" alt="المعلم مستر عبدالسلام" class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3] border-2 border-[#f6c951]/20" loading="lazy">
                    <div class="absolute -bottom-4 -right-4 bg-[#101820] border border-[#f6c951]/20 rounded-xl shadow-xl p-4 flex items-center gap-3 animate-bounce-slow">
                        <span class="text-3xl">⭐</span>
                        <div>
                            <p class="font-bold text-[#f6c951]">خبرة 8 سنوات</p>
                            <p class="text-sm text-gray-400">تخريج آلاف الطلاب</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
        <a href="#about" class="text-[#f6c951] hover:text-yellow-300 transition-colors" aria-label="انتقل للأسفل">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </a>
    </div>
</section>

<style>
    @keyframes pulse-glow {
        0%, 100% {
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.45);
            transform: scale(1);
        }
        50% {
            box-shadow: 0 15px 45px rgba(245, 158, 11, 0.7), 0 0 30px rgba(246, 201, 81, 0.4);
            transform: scale(1.02);
        }
    }
    .animate-pulse-glow {
        animation: pulse-glow 2.5s ease-in-out infinite;
    }
    @keyframes float-anim {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -20px) scale(1.05); }
        66% { transform: translate(-20px, 15px) scale(0.95); }
    }
    .animate-float {
        animation: float-anim 10s ease-in-out infinite;
    }
</style>