{{-- resources/views/components/portfolio-link.blade.php --}}
{{-- زر عائم احترافي لفريق التطوير --}}
{{-- الإصدار النهائي: نقر على الاسم/الصورة + قائمة تبقى مفتوحة --}}

<div 
    id="portfolio-btn-wrapper"
    class="fixed bottom-6 left-6 z-[60] transition-all duration-500 ease-in-out"
    style="direction: rtl; transform: translateY(0); opacity: 1;"
>
    {{-- ✅ لوحة الفريق (تظهر عند hover أو click) --}}
    <div id="team-panel" class="team-panel absolute bottom-full left-0 mb-3 w-80 md:w-[26rem] bg-[#101820] rounded-2xl shadow-2xl border-2 border-[#f6c951]/40 overflow-hidden" style="direction: rtl;">
        
        {{-- رأس اللوحة --}}
        <div class="bg-gradient-to-l from-[#f6c951] via-[#fbbf24] to-[#f59e0b] px-4 py-3">
            <h3 class="text-[#062f47] font-extrabold text-base flex items-center gap-2">
                <span>👨‍💻</span>
                <span>فريق التطوير</span>
            </h3>
            <p class="text-[#062f47]/70 text-xs mt-0.5">The team behind The Ocean Series</p>
        </div>

        {{-- ============================================= --}}
        {{-- بطاقة المطور الأول: أحمد عبد النبي (أنت) --}}
        {{-- ============================================= --}}
        <div class="p-4 border-b border-[#f6c951]/10 hover:bg-[#f6c951]/5 transition-colors duration-200">
            
            {{-- ✅ الصورة والاسم قابلان للنقر (يفتحان البورتفوليو) --}}
            <a href="{{ route('ahmed.home') }}" class="flex items-start gap-3 group/name cursor-pointer" title="عرض البورتفوليو الكامل">
                <img 
                    src="{{ asset('assets/images/team/ahmed-about.jpg') }}" 
                    alt="أحمد عبد النبي" 
                    class="w-14 h-14 rounded-full border-2 border-[#f6c951]/50 flex-shrink-0 object-cover group-hover/name:scale-110 group-hover/name:border-[#f6c951] transition-all duration-300"
                >
                <div class="flex-1 min-w-0">
                    <h4 class="text-white font-bold text-sm group-hover/name:text-[#f6c951] transition-colors flex items-center gap-1">
                        أحمد عبد النبي عبداللاه
                        <span class="text-[10px] text-[#f6c951] opacity-0 group-hover/name:opacity-100 transition">↗</span>
                    </h4>
                    <p class="text-[#f6c951] text-xs mt-0.5">مطور المنصة | PHP Laravel Developer</p>
                    <p class="text-gray-400 text-xs mt-1 flex items-center gap-1">
                        <span>📍</span>
                        <span>الأقصر، مصر</span>
                    </p>
                </div>
            </a>
            
            {{-- المهارات --}}
            <div class="flex flex-wrap gap-1.5 mt-3">
                <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full text-[10px] border border-[#f6c951]/30">Laravel</span>
                <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full text-[10px] border border-[#f6c951]/30">التسويق الرقمي</span>
                <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full text-[10px] border border-[#f6c951]/30">ICDL</span>
                <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full text-[10px] border border-[#f6c951]/30">التحول الرقمي</span>
            </div>

            {{-- أزرار التواصل --}}
            <div class="flex flex-wrap gap-2 mt-3">
                <a href="https://www.linkedin.com/in/ahmed--abdelnaby" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-[#0a66c2] hover:bg-[#004182] text-white text-xs font-bold rounded-lg transition-all duration-300 hover:scale-105">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </a>
                <a href="mailto:Ahmed.dev.team.ai@gmail.com" 
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-[#f6c951]/10 hover:bg-[#f6c951]/20 text-[#f6c951] text-xs font-bold rounded-lg border border-[#f6c951]/30 transition-all duration-300 hover:scale-105">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    البريد
                </a>
                <a href="tel:+201112465676" 
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-green-500/10 hover:bg-green-500/20 text-green-400 text-xs font-bold rounded-lg border border-green-500/30 transition-all duration-300 hover:scale-105">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    الهاتف
                </a>
            </div>

            {{-- ✅ زر "عرض البورتفوليو" الكامل --}}
            <a href="{{ route('ahmed.home') }}" 
               class="mt-3 w-full inline-flex items-center justify-center gap-2 px-4 py-2 bg-gradient-to-r from-[#f6c951] to-[#f59e0b] hover:from-[#f59e0b] hover:to-[#f6c951] text-[#062f47] text-xs font-extrabold rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                عرض البورتفوليو الكامل
            </a>
        </div>

        {{-- ============================================= --}}
        {{-- بطاقة المطور الثاني: أحمد عبد الرحمن --}}
        {{-- ============================================= --}}
        <div class="p-4 hover:bg-[#f6c951]/5 transition-colors duration-200">
            <div class="flex items-start gap-3">
                <img 
                    src="https://ui-avatars.com/api/?name=Ahmed+Abdulrahman&size=80&background=0a66c2&color=fff&bold=true" 
                    alt="أحمد عبد الرحمن" 
                    class="w-14 h-14 rounded-full border-2 border-blue-500/50 flex-shrink-0 object-cover"
                >
                <div class="flex-1 min-w-0">
                    <h4 class="text-white font-bold text-sm">أحمد عبد الرحمن</h4>
                    <p class="text-blue-400 text-xs mt-0.5">Software Engineer | QA Automation Analyst</p>
                    <p class="text-gray-400 text-xs mt-1 flex items-center gap-1">
                        <span>📍</span>
                        <span>الرياض، السعودية</span>
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap gap-1.5 mt-3">
                <span class="bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded-full text-[10px] border border-blue-500/30">Software Engineering</span>
                <span class="bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded-full text-[10px] border border-blue-500/30">QA Automation</span>
                <span class="bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded-full text-[10px] border border-blue-500/30">IT Specialist</span>
            </div>

            <div class="flex flex-wrap gap-2 mt-3">
                <a href="https://www.linkedin.com/in/ahmed-abdulrahman" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-[#0a66c2] hover:bg-[#004182] text-white text-xs font-bold rounded-lg transition-all duration-300 hover:scale-105">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </div>

    {{-- ✅ الزر الرئيسي --}}
    <button 
        id="team-btn"
        class="portfolio-btn relative flex items-center gap-2 px-5 py-3 text-[#062f47] font-extrabold rounded-full border-2 border-white/50 overflow-hidden cursor-pointer"
        aria-label="عرض فريق التطوير"
        style="background: linear-gradient(270deg, #f6c951, #fbbf24, #f59e0b, #f6c951, #fbbf24); background-size: 300% 100%; animation: gradientShift 6s ease infinite, gentleShake 8s ease-in-out infinite;"
    >
        <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
        
        <span class="relative z-10 text-sm">فريق التطوير</span>
        
        <span class="absolute -top-1 -right-1 flex h-3 w-3 z-20">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500 border-2 border-white"></span>
        </span>
        
        <span class="absolute inset-0 z-0 pointer-events-none">
            <span class="shine-effect absolute top-0 left-0 w-full h-full"></span>
        </span>
    </button>
</div>

{{-- ✅ رابط الفوتر --}}
<div class="hidden md:block text-center py-3 text-sm text-gray-500 border-t border-gray-200 mt-6">
    <span>صُممت وطُوّرت بواسطة </span>
    <a href="{{ route('ahmed.home') }}" 
       class="text-[#f6c951] hover:text-[#f59e0b] font-bold transition-colors duration-300 underline decoration-dotted underline-offset-4">
        أحمد عبد النبي
    </a>
    <span> 💚</span>
</div>

<style>
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @keyframes gentleShake {
        0%, 85%, 100% { transform: translateX(0) rotate(0deg); }
        88% { transform: translateX(-3px) rotate(-2deg); }
        90% { transform: translateX(3px) rotate(2deg); }
        92% { transform: translateX(-3px) rotate(-2deg); }
        94% { transform: translateX(3px) rotate(2deg); }
        96% { transform: translateX(0) rotate(0deg); }
    }

    @keyframes shine {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(200%); }
    }
    .shine-effect::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
        transform: skewX(-20deg);
        animation: shine 4s ease-in-out infinite;
    }

    /* لوحة الفريق - مخفية افتراضياً */
    .team-panel {
        opacity: 0;
        pointer-events: none;
        transform: translateY(10px);
        transition: all 0.3s ease;
        max-height: 0;
        overflow: hidden;
    }

    /* عند التمرير على الزر → إظهار اللوحة */
    #portfolio-btn-wrapper:hover .team-panel {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
        max-height: 800px;
    }

    /* ✅ جسر غير مرئي بين الزر واللوحة (لمنع الاختفاء المفاجئ) */
    .team-panel::after {
        content: '';
        position: absolute;
        bottom: -20px;
        left: 0;
        right: 0;
        height: 20px;
        background: transparent;
    }

    /* توقف الأنيميشن عند التمرير */
    #portfolio-btn-wrapper:hover .portfolio-btn {
        animation-play-state: paused;
        box-shadow: 0 15px 45px rgba(245, 158, 11, 0.7), 0 0 30px rgba(246, 201, 81, 0.5);
        transform: translateY(-3px) scale(1.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* تحسين الموبايل */
    @media (max-width: 640px) {
        #portfolio-btn-wrapper {
            bottom: 1rem;
            left: 1rem;
        }
        .portfolio-btn {
            padding: 0.6rem 1rem !important;
            font-size: 0.8rem;
        }
        .team-panel {
            width: 280px;
            max-height: 0;
        }
        #portfolio-btn-wrapper:hover .team-panel {
            max-height: 700px;
        }
        .team-panel img {
            width: 40px;
            height: 40px;
        }
    }

    /* حالة الاختفاء عند التمرير لأسفل */
    .portfolio-hidden {
        transform: translateY(150px) !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }
</style>

<script>
    // ✅ إخفاء الزر عند التمرير للأسفل، وإظهاره عند التمرير للأعلى
    (function() {
        const btn = document.getElementById('portfolio-btn-wrapper');
        const panel = document.getElementById('team-panel');
        if (!btn) return;

        // ✅ تأخير إخفاء اللوحة (لمنع الاختفاء المفاجئ)
        let hideTimer;
        
        btn.addEventListener('mouseenter', () => {
            clearTimeout(hideTimer);
            if (panel) {
                panel.style.opacity = '1';
                panel.style.pointerEvents = 'auto';
                panel.style.transform = 'translateY(0)';
                panel.style.maxHeight = '800px';
            }
        });

        btn.addEventListener('mouseleave', () => {
            hideTimer = setTimeout(() => {
                if (panel) {
                    panel.style.opacity = '0';
                    panel.style.pointerEvents = 'none';
                    panel.style.transform = 'translateY(10px)';
                    panel.style.maxHeight = '0';
                }
            }, 500); // 500ms تأخير
        });

        // ✅ إخفاء الزر عند التمرير للأسفل
        let lastScrollY = window.scrollY;
        let ticking = false;

        function handleScroll() {
            const currentScrollY = window.scrollY;
            const scrollThreshold = 100;

            if (currentScrollY > lastScrollY && currentScrollY > scrollThreshold) {
                btn.classList.add('portfolio-hidden');
            } else if (currentScrollY < lastScrollY) {
                btn.classList.remove('portfolio-hidden');
            }

            lastScrollY = currentScrollY;
            ticking = false;
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(handleScroll);
                ticking = true;
            }
        }, { passive: true });
    })();
</script>