{{-- شريط علوي رفيع باللون الأصفر مع أيقونات التواصل --}}

<div
    role="complementary"
    aria-label="شريط الترحيب"
   class="topbar-wrapper w-full overflow-hidden bg-gradient-to-r from-[#f6c951] to-[#fbbf24] border-b border-[#f6c951]/30 text-[#062f47] shadow-sm"
>
    <div class="topbar-container relative py-1.5 md:py-2">
        <div class="topbar-track flex items-center whitespace-nowrap text-xs md:text-sm lg:text-base font-semibold" style="animation: topbar-scroll 30s linear infinite;">

            {{-- النص الأساسي + أيقونات --}}
            <span class="topbar-item inline-flex items-center gap-2 mx-6 md:mx-10 lg:mx-12">
                🌊
                <span>مرحبا بكم في منصة المحيط في اللغة الانجليزية مع خبرة</span>
                <span class="text-[#062f47] font-extrabold">8 سنوات</span>
                <span>واكثر من العطاء والنجاح</span>
                <span class="text-[#062f47] font-bold">Mr.Abdel Salam Radwan</span>

                <span class="inline-flex items-center gap-2 mx-2">
                    <a href="mailto:abdohanafi011111@gmail.com" class="hover:opacity-80 transition-opacity duration-300" aria-label="البريد الإلكتروني">
                        <i class="fa-solid fa-envelope text-[#062f47] text-sm md:text-base"></i>
                    </a>
                    <span class="text-[#062f47]/40">|</span>
                    <a href="https://wa.me/2011111168104" target="_blank" class="hover:opacity-80 transition-opacity duration-300" aria-label="واتساب">
                        <i class="fa-brands fa-whatsapp text-[#25D366] text-sm md:text-base"></i>
                    </a>
                </span>
            </span>

            {{-- تكرار النص --}}
            <span class="topbar-item inline-flex items-center gap-2 mx-6 md:mx-10 lg:mx-12">
                🌊
                <span>مرحبا بكم في منصة المحيط في اللغة الانجليزية مع خبرة</span>
                <span class="text-[#062f47] font-extrabold">8 سنوات</span>
                <span>واكثر من العطاء والنجاح</span>
                <span class="text-[#062f47] font-bold">Mr.Abdel Salam Radwan</span>

                <span class="inline-flex items-center gap-2 mx-2">
                    <a href="mailto:abdohanafi011111@gmail.com" class="hover:opacity-80 transition-opacity duration-300" aria-label="البريد الإلكتروني">
                        <i class="fa-solid fa-envelope text-[#062f47] text-sm md:text-base"></i>
                    </a>
                    <span class="text-[#062f47]/40">|</span>
                    <a href="https://wa.me/2011111168104" target="_blank" class="hover:opacity-80 transition-opacity duration-300" aria-label="واتساب">
                        <i class="fa-brands fa-whatsapp text-[#25D366] text-sm md:text-base"></i>
                    </a>
                </span>
            </span>

        </div>
    </div>
</div>

<style>
    .topbar-wrapper {
        position: relative;
        z-index: 40;
        width: 100%;
    }
    .topbar-container {
        width: 100%;
        overflow: hidden;
        direction: ltr;
    }
    .topbar-track {
        display: inline-flex;
        align-items: center;
        width: max-content;
        min-width: max-content;
        white-space: nowrap;
        will-change: transform;
    }
    .topbar-item {
        display: inline-flex;
        align-items: center;
        flex-shrink: 0;
        gap: 0.5rem;
    }
    @keyframes topbar-scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .topbar-wrapper:hover .topbar-track {
        animation-play-state: paused !important;
    }
    @media (max-width: 640px) {
        .topbar-track {
            animation-duration: 20s !important;
        }
        .topbar-item {
            font-size: 0.6rem;
            gap: 0.25rem;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }
        .topbar-container {
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }
        .topbar-item .fa-envelope,
        .topbar-item .fa-whatsapp {
            font-size: 0.7rem !important;
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .topbar-track {
            animation: none !important;
            transform: translateX(0) !important;
        }
        .topbar-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }
    }
</style>