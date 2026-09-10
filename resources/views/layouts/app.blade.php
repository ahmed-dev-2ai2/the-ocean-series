<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'سلسلة المحيط 2027 | منصة مستر عبد السلام رضوان للغة الإنجليزية')</title>
    <meta name="title" content="@yield('title', 'سلسلة المحيط 2027 | منصة مستر عبد السلام رضوان للغة الإنجليزية')">
    <meta name="description" content="@yield('description', 'المنصة الرسمية لسلسلة المحيط 2027 للأستاذ عبد السلام رضوان. دورات لغة إنجليزية تفاعلية، كتاب الشرح والتدريبات، واختبارات لضمان التفوق والوصول للقمة.')">
    <meta name="keywords" content="@yield('keywords', 'سلسلة المحيط 2027, مستر عبد السلام رضوان, The Ocean Series 2027, تعلم اللغة الإنجليزية, ثانوية عامة إنجليزي')">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Arabic">
    <meta name="author" content="Ahmed Abdelnaby">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="سلسلة المحيط 2027 | مستر عبد السلام رضوان">
    <meta property="og:description" content="طريقك للقمة في اللغة الإنجليزية مع مستر عبد السلام رضوان. انضم الآن وتصفح المحاضرات والكتب.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="سلسلة المحيط 2027 | مستر عبد السلام رضوان">
    <meta name="twitter:description" content="طريقك للقمة في اللغة الإنجليزية مع مستر عبد السلام رضوان. انضم الآن وتصفح المحاضرات والكتب.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "EducationalOrganization",
          "@id": "{{ url('/') }}/#organization",
          "name": "سلسلة المحيط 2027 - The Ocean Series",
          "url": "{{ url('/') }}",
          "telephone": ["+201111168104", "+201027635545"]
        },
        {
          "@type": "Person",
          "@id": "{{ url('/') }}/#teacher",
          "name": "عبد السلام رضوان",
          "jobTitle": "Professor of English Language"
        }
      ]
    }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="font-cairo bg-white text-gray-900 antialiased">

    {{-- شاشة الترحيب --}}
    <div id="splash-screen" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, #0a1a2e 0%, #010407 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; z-index: 9999; transition: opacity 1.2s ease; font-family: 'Cairo', sans-serif;">
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="شعار THE OCEAN SERIES" style="width: 320px; max-width: 90vw; height: auto; border-radius: 20px; position: relative; z-index: 1; animation: royalEntrance 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.15));">
        <h2 style="margin-top: 25px; color: #d4af37; font-size: 1.8rem; letter-spacing: 3px; opacity: 0; animation: textFade 1s ease-out 1.5s forwards; z-index: 1; font-weight: 300;">مرحباً بكم في</h2>
        <h2 style="color: #f6c951; font-size: 2.5rem; letter-spacing: 5px; opacity: 0; animation: textFade 1s ease-out 1.8s forwards; z-index: 1; font-weight: 700;">THE OCEAN SERIES</h2>
    </div>

    <style>
        @keyframes royalEntrance {
            0% { transform: scale(0.2) rotate(-40deg); opacity: 0; }
            50% { transform: scale(1.1) rotate(4deg); opacity: 1; }
            70% { transform: scale(0.95) rotate(-1deg); opacity: 1; }
            100% { transform: scale(1) rotate(0deg); opacity: 1; }
        }
        @keyframes textFade {
            0% { opacity: 0; transform: translateY(15px); }
            100% { opacity: 0.9; transform: translateY(0); }
        }
        #splash-screen.fade-out {
            opacity: 0;
            pointer-events: none;
        }
    </style>

    <script>
        setTimeout(() => {
            const splash = document.getElementById('splash-screen');
            splash.classList.add('fade-out');
            setTimeout(() => { splash.style.display = 'none'; }, 1200);
        }, 2800);
    </script>

    {{-- ============================================= --}}
    {{-- ✅ شريط الأخبار (ثابت في الأعلى) --}}
    {{-- ============================================= --}}
    <div id="site-news-ticker" style="position: fixed; top: 0; left: 0; width: 100%; height: 42px; z-index: 70; background: #0f172a; border-bottom: 2px solid #f6c951; overflow: hidden; direction: rtl; display: flex; align-items: center;">
        <div style="display: flex; white-space: nowrap; animation: scroll-news-simple 25s linear infinite; gap: 0;">
            <span style="display: inline-block; padding: 0 35px; color: #facc15; font-weight: 500; font-size: 14px; font-family: 'Cairo', sans-serif;">📢 تحديثات المنصة: جاري التطوير المستمر لإضافة مزايا جديدة</span>
            <span style="display: inline-block; padding: 0 35px; color: #facc15; font-weight: 500; font-size: 14px; font-family: 'Cairo', sans-serif;">🎥 تم تفعيل خاصية رفع وعرض الفيديوهات بنجاح</span>
            <span style="display: inline-block; padding: 0 35px; color: #facc15; font-weight: 500; font-size: 14px; font-family: 'Cairo', sans-serif;">⚙️ المنصة حالياً في مرحلة التشغيل التجريبي (Demo) وجاري التحديث المستمر</span>
            <span style="display: inline-block; padding: 0 35px; color: #facc15; font-weight: 500; font-size: 14px; font-family: 'Cairo', sans-serif;">📢 تحديثات المنصة: جاري التطوير المستمر لإضافة مزايا جديدة</span>
            <span style="display: inline-block; padding: 0 35px; color: #facc15; font-weight: 500; font-size: 14px; font-family: 'Cairo', sans-serif;">🎥 تم تفعيل خاصية رفع وعرض الفيديوهات بنجاح</span>
            <span style="display: inline-block; padding: 0 35px; color: #facc15; font-weight: 500; font-size: 14px; font-family: 'Cairo', sans-serif;">⚙️ المنصة حالياً في مرحلة التشغيل التجريبي (Demo) وجاري التحديث المستمر</span>
        </div>
    </div>

    <style>
        @keyframes scroll-news-simple {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        #site-news-ticker:hover > div {
            animation-play-state: paused;
        }
        @media (max-width: 640px) {
            #site-news-ticker { height: 38px; }
        }
    </style>

    {{-- ============================================= --}}
    {{-- ✅ المحتوى الرئيسي (الفراغ العلوي = 42px شريط الأخبار + 56px نافبار) --}}
    {{-- ============================================= --}}
    <div id="app" class="pt-[98px] md:pt-[106px]">
        @yield('content')
    </div>

    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSlider = document.querySelector('.heroSlider');
            if (heroSlider) {
                new Swiper(".heroSlider", {
                    loop: true,
                    effect: "fade",
                    autoplay: { delay: 3500, disableOnInteraction: false },
                    pagination: { el: ".swiper-pagination", clickable: true },
                });
            }
        });
    </script>

</body>
</html>