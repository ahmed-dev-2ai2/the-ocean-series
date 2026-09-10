{{-- resources/views/components/news-ticker.blade.php --}}
{{-- شريط الأخبار المتحرك – نسخة مضمونة للهواتف --}}

<div class="news-ticker-wrapper">
    <div class="news-ticker">
        <div class="news-track">

            {{-- ===== المحتوى الأول ===== --}}
            <span>📢 خبر عاجل: تحديثات جديدة في النظام</span>
            <span>⭐ عروض حصرية لفترة محدودة</span>
            <span>📅 موعد الصيانة القادم يوم الخميس</span>
            <span>📢 خبر عاجل: تحديثات جديدة في النظام</span>
            <span>⭐ عروض حصرية لفترة محدودة</span>

            {{-- ===== تكرار المحتوى (لضمان استمرارية الحركة) ===== --}}
            <span>📢 خبر عاجل: تحديثات جديدة في النظام</span>
            <span>⭐ عروض حصرية لفترة محدودة</span>
            <span>📅 موعد الصيانة القادم يوم الخميس</span>
            <span>📢 خبر عاجل: تحديثات جديدة في النظام</span>
            <span>⭐ عروض حصرية لفترة محدودة</span>

        </div>
    </div>
</div>

<style>
    /* ===== الحاوية الأساسية ===== */
    .news-ticker-wrapper {
        width: 100%;
        background: #0f172a;
        border-bottom: 2px solid rgba(246, 201, 81, 0.15);
        overflow: hidden;
        position: relative;
        z-index: 60;
    }

    .news-ticker {
        width: 100%;
        overflow: hidden;
        padding: 10px 0;
        direction: rtl;
    }

    .news-track {
        display: inline-flex;
        white-space: nowrap;
        animation: scroll-news 30s linear infinite;
        width: max-content;
        will-change: transform;
        gap: 0;
    }

    .news-track span {
        display: inline-block;
        padding: 0 40px;
        color: #facc15;
        font-weight: 500;
        font-size: 15px;
        flex-shrink: 0;
        font-family: 'Cairo', sans-serif;
    }

    @keyframes scroll-news {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    /* التوقف عند التمرير أو اللمس */
    .news-ticker-wrapper:hover .news-track,
    .news-ticker-wrapper:active .news-track,
    .news-ticker-wrapper:focus-within .news-track {
        animation-play-state: paused;
    }

    /* ============================================= */
    /* 🟢 تحسين الهواتف (الأهم)                    */
    /* ============================================= */
    @media (max-width: 640px) {
        .news-ticker {
            padding: 8px 0;
        }

        .news-track {
            animation-duration: 60s !important; /* 🔥 أبطأ من قبل (دقيقة كاملة) */
        }

        .news-track span {
            font-size: 12px;
            padding: 0 18px;
            color: #fbbf24;
        }
    }

    /* ============================================= */
    /* تحسين التابلت                                */
    /* ============================================= */
    @media (min-width: 641px) and (max-width: 1024px) {
        .news-track {
            animation-duration: 35s;
        }
        .news-track span {
            padding: 0 30px;
            font-size: 14px;
        }
    }

    /* ============================================= */
    /* تقليل الحركة (لمن يفضلون ذلك)               */
    /* ============================================= */
    @media (prefers-reduced-motion: reduce) {
        .news-track {
            animation: none !important;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }
        .news-track span {
            padding: 0 15px;
        }
    }
</style>