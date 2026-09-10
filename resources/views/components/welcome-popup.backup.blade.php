{{-- resources/views/components/welcome-popup.blade.php --}}
{{-- Welcome Popup محسّن بالكامل مع استجابة فائقة --}}

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // =============================================
        // 1. عناصر النافذة
        // =============================================
        const popup = document.getElementById('welcome-popup');
        const closeBtn = document.getElementById('close-popup');
        const overlay = document.getElementById('popup-overlay');

        if (!popup || !closeBtn || !overlay) {
            console.warn('⚠️ عناصر النافذة غير موجودة');
            return;
        }

        // =============================================
        // 2. متغيرات التحكم
        // =============================================
        let popupTimeout;
        let isOpen = false;
        let isClosing = false;

        // =============================================
        // 3. دوال العرض والإخفاء
        // =============================================
        function showPopup() {
            if (isOpen || isClosing) return;
            isOpen = true;

            overlay.classList.remove('hidden');
            overlay.classList.add('opacity-100');

            popup.classList.remove('hidden', 'opacity-0', 'scale-95');
            popup.classList.add('opacity-100', 'scale-100');

            typeText();
            document.body.style.overflow = 'hidden';

            popupTimeout = setTimeout(() => {
                hidePopup();
            }, 12000);
        }

        function hidePopup() {
            if (isClosing || !isOpen) return;
            isClosing = true;

            popup.classList.remove('opacity-100', 'scale-100');
            popup.classList.add('opacity-0', 'scale-95');

            overlay.classList.remove('opacity-100');
            overlay.classList.add('opacity-0');

            document.body.style.overflow = '';

            setTimeout(() => {
                popup.classList.add('hidden');
                overlay.classList.add('hidden');
                isOpen = false;
                isClosing = false;
            }, 400);
        }

        // =============================================
        // 4. تأثير الكتابة (Typing Effect)
        // =============================================
        function typeText() {
            const textElement = document.getElementById('typing-text');
            if (!textElement) return;

            const text = 'مرحباً بك في 🌊 THE OCEAN SERIES';
            let index = 0;
            textElement.textContent = '';

            function type() {
                if (index < text.length) {
                    textElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(type, 50);
                }
            }

            setTimeout(type, 500);
        }

        // =============================================
        // 5. أحداث الإغلاق
        // =============================================
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            clearTimeout(popupTimeout);
            hidePopup();
        });

        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                clearTimeout(popupTimeout);
                hidePopup();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isOpen) {
                clearTimeout(popupTimeout);
                hidePopup();
            }
        });

        // =============================================
        // 6. عرض النافذة بعد تحميل الصفحة
        // =============================================
        setTimeout(showPopup, 2000);

        // =============================================
        // 7. معالجة الأخطاء
        // =============================================
        window.addEventListener('error', function(e) {
            console.warn('⚠️ تم تجاوز خطأ في النافذة:', e.message);
            try {
                hidePopup();
            } catch (err) {
                // تجاهل
            }
            return true;
        });

        console.log('✅ نافذة الترحيب المحسّنة تم تحميلها بنجاح');
    });
</script>
@endpush

{{-- ============================================= --}}
{{-- HTML Structure --}}
{{-- ============================================= --}}

{{-- الخلفية المعتمة --}}
<div 
    id="popup-overlay" 
    class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-500"
    aria-hidden="true"
></div>

{{-- النافذة المنبثقة --}}
<div 
    id="welcome-popup" 
    class="fixed inset-0 z-50 flex items-center justify-center p-2 sm:p-4 hidden opacity-0 scale-95 transition-all duration-500 ease-out"
    role="dialog"
    aria-modal="true"
    aria-labelledby="popup-title"
>
    <div 
        id="popup-content"
        class="relative bg-gradient-to-br from-[#101820] to-[#1a2533] rounded-3xl shadow-2xl max-w-sm sm:max-w-md w-full border border-[#f6c951]/20 overflow-hidden mx-2 sm:mx-0"
    >

        {{-- ===== صورة الأستاذ مع حركة الفم (استجابة كاملة) ===== --}}
        <div class="relative bg-gradient-to-b from-[#062f47] to-[#101820] pt-6 sm:pt-8 md:pt-10 pb-3 sm:pb-4">
            
            {{-- صورة الأستاذ (حجم متجاوب) --}}
            <div class="relative w-28 h-28 sm:w-36 sm:h-36 md:w-40 md:h-40 mx-auto">
                <img 
                    src="{{ asset('assets/images/welcome/welcome-teacher.png') }}" 
                    alt="مستر عبدالسلام رضوان" 
                    class="w-full h-full rounded-full object-cover border-4 border-[#f6c951] shadow-2xl"
                    loading="lazy"
                >
                
                {{-- ===== حركة الفم (حجم متجاوب) ===== --}}
                <div class="absolute -bottom-2 sm:-bottom-3 left-1/2 transform -translate-x-1/2">
                    <div class="flex justify-center items-end gap-1 sm:gap-1.5">
                        <img 
                            src="{{ asset('assets/images/welcome/mouth-upper.png') }}" 
                            alt=""
                            class="w-4 h-4 sm:w-5 sm:h-5 object-contain animate-mouth-upper"
                            loading="lazy"
                        >
                        <img 
                            src="{{ asset('assets/images/welcome/mouth-filler.png') }}" 
                            alt=""
                            class="w-4 h-4 sm:w-5 sm:h-5 object-contain animate-mouth-filler"
                            loading="lazy"
                        >
                        <img 
                            src="{{ asset('assets/images/welcome/mouth-lower.png') }}" 
                            alt=""
                            class="w-4 h-4 sm:w-5 sm:h-5 object-contain animate-mouth-lower"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>

            {{-- اسم الأستاذ (حجم خط متجاوب) --}}
            <p class="text-center text-white font-bold mt-3 sm:mt-4 text-sm sm:text-base md:text-lg">
                مستر <span class="text-[#f6c951]">عبدالسلام رضوان</span>
            </p>
        </div>

        {{-- ===== المحتوى ===== --}}
        <div class="p-4 sm:p-6 text-center">

            {{-- عنوان مع تأثير الكتابة --}}
            <h2 id="popup-title" class="text-xl sm:text-2xl font-bold text-white mb-2">
                <span id="typing-text" class="text-[#f6c951]"></span>
            </h2>

            {{-- رسالة ترحيبية --}}
            <p class="text-gray-300 leading-relaxed text-xs sm:text-sm mb-4">
                🌊 نرحب بانضمامك إلى عائلتنا التعليمية.  
                استعد لرحلة ممتعة في عالم اللغة الإنجليزية مع أفضل المعلمين.
            </p>

            {{-- زر البداية (واضح على جميع الأجهزة) --}}
            <a 
                href="#courses" 
                class="inline-flex items-center gap-1.5 sm:gap-2 px-4 sm:px-6 py-2.5 sm:py-3 bg-gradient-to-r from-[#f6c951] to-yellow-400 text-[#062f47] font-bold rounded-full hover:shadow-lg hover:shadow-[#f6c951]/30 transition-all duration-300 hover:-translate-y-1 text-sm sm:text-base"
            >
                🚀 ابدأ رحلتك الآن
            </a>
        </div>

        {{-- ===== زر الإغلاق (ثابت ومناسب) ===== --}}
        <button 
            id="close-popup"
            class="absolute top-2 sm:top-3 left-2 sm:left-3 text-gray-400 hover:text-[#f6c951] transition-colors text-xl sm:text-2xl focus:outline-none focus:ring-2 focus:ring-[#f6c951] rounded-full p-1 bg-[#101820]/50 backdrop-blur-sm"
            aria-label="إغلاق النافذة"
        >
            ✕
        </button>

        {{-- ===== شعار صغير ===== --}}
        <div class="px-4 sm:px-6 pb-3 sm:pb-4 text-center">
            <p class="text-[10px] sm:text-xs text-gray-500 border-t border-[#f6c951]/10 pt-2 sm:pt-3">
                THE OCEAN SERIES &copy; {{ date('Y') }}
            </p>
        </div>
    </div>
</div>

{{-- ============================================= --}}
{{-- CSS للحركات والأنيميشن --}}
{{-- ============================================= --}}
<style>
    /* ===== حركة الفم (Lipsync) ===== */
    @keyframes mouth-upper-anim {
        0%, 100% { transform: translateY(0) scaleY(1); }
        50% { transform: translateY(-3px) scaleY(0.6); }
    }
    @keyframes mouth-filler-anim {
        0%, 100% { transform: scaleY(1); opacity: 1; }
        50% { transform: scaleY(0.4); opacity: 0.5; }
    }
    @keyframes mouth-lower-anim {
        0%, 100% { transform: translateY(0) scaleY(1); }
        50% { transform: translateY(3px) scaleY(0.6); }
    }

    .animate-mouth-upper {
        animation: mouth-upper-anim 0.6s ease-in-out infinite;
        transform-origin: bottom;
    }
    .animate-mouth-filler {
        animation: mouth-filler-anim 0.6s ease-in-out infinite;
        transform-origin: bottom;
    }
    .animate-mouth-lower {
        animation: mouth-lower-anim 0.6s ease-in-out infinite;
        transform-origin: top;
    }

    /* ===== تحسين ظهور النافذة ===== */
    #welcome-popup {
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    /* ===== تحسين إضافي للجوالات الصغيرة جداً ===== */
    @media (max-width: 380px) {
        #popup-content {
            max-width: 98%;
            margin: 0.5rem;
        }
        .w-28 {
            width: 5.5rem;
            height: 5.5rem;
        }
        .w-4 {
            width: 0.75rem;
            height: 0.75rem;
        }
        .text-xl {
            font-size: 1.1rem;
        }
        .text-xs {
            font-size: 0.7rem;
        }
    }

    /* ===== تحسين للشاشات المتوسطة (تابلت) ===== */
    @media (min-width: 641px) and (max-width: 1024px) {
        #popup-content {
            max-width: 80%;
        }
    }

    /* ===== تحسين للشاشات الكبيرة ===== */
    @media (min-width: 1025px) {
        #popup-content {
            max-width: 450px;
        }
    }

    /* ===== تقليل الحركة لمن يفضلون ذلك ===== */
    @media (prefers-reduced-motion: reduce) {
        .animate-mouth-upper,
        .animate-mouth-filler,
        .animate-mouth-lower {
            animation: none;
        }
        #welcome-popup {
            transition: opacity 0.2s ease;
        }
    }
</style>