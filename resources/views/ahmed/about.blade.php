<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أحمد | من أنا</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-[#0a1a2e] via-[#062f47] to-[#010407] text-white min-h-screen">

    {{-- ===== شريط التنقل ===== --}}
    <nav class="bg-[#101820]/90 backdrop-blur-md shadow-lg py-4 px-6 sticky top-0 z-50 border-b border-[#f6c951]/20">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-[#f6c951]">أحمد</h1>
            <div class="flex gap-3 md:gap-5 flex-wrap text-sm md:text-base">
                <a href="{{ route('ahmed.home') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">الرئيسية</a>
                <a href="{{ route('ahmed.about') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">من أنا</a>
                <a href="{{ route('ahmed.skills') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">مهاراتي</a>
                <a href="{{ route('ahmed.projects') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">مشاريعي</a>
                <a href="{{ route('ahmed.gallery') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">معرضي</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">اتصل بي</a>
            </div>
        </div>
    </nav>

    {{-- ===== المحتوى ===== --}}
    <section class="max-w-5xl mx-auto mt-12 p-6 bg-white/5 backdrop-blur-md rounded-3xl shadow-2xl border border-[#f6c951]/20">
        <div class="flex flex-col md:flex-row items-center gap-8">
            
            {{-- الصورة --}}
            <div class="flex-shrink-0">
                <img src="https://ui-avatars.com/api/?name=Ahmed&size=200&background=f6c951&color=062f47&bold=true" 
                     alt="صورة أحمد" 
                     class="w-44 h-44 rounded-full shadow-2xl border-4 border-[#f6c951]/50">
            </div>

            {{-- النص --}}
            <div class="text-center md:text-right flex-1">
                <h2 class="text-4xl font-bold text-[#f6c951]">أحمد عبد النبي</h2>
                <p class="text-xl text-yellow-300 mt-2">مطور ويب ومصمم واجهات</p>
                <p class="text-gray-300 leading-relaxed mt-4 text-lg">
                    مرحباً! أنا أحمد، شغوف ببناء تطبيقات ويب سلسة وسريعة. 
                    أؤمن بأن التصميم الجيد ليس مجرد شكل، بل تجربة تترك أثراً في قلب المستخدم. 
                    أعمل باستمرار على تطوير مهاراتي في <strong class="text-[#f6c951]">Laravel</strong> و <strong class="text-[#f6c951]">Tailwind CSS</strong> 
                    لأقدم حلولاً تقنية مبتكرة.
                </p>
                <div class="mt-6 flex gap-3 flex-wrap justify-center md:justify-start">
                    <span class="bg-[#f6c951]/10 text-[#f6c951] px-4 py-2 rounded-full text-sm border border-[#f6c951]/30">🎯 حل المشكلات</span>
                    <span class="bg-green-500/10 text-green-400 px-4 py-2 rounded-full text-sm border border-green-500/30">⚡ أداء عالي</span>
                    <span class="bg-purple-500/10 text-purple-400 px-4 py-2 rounded-full text-sm border border-purple-500/30">🎨 تصميم عصري</span>
                </div>
            </div>
        </div>

        {{-- الخبرات والتعليم --}}
        <div class="grid md:grid-cols-2 gap-6 mt-10 border-t border-[#f6c951]/20 pt-8">
            <div>
                <h3 class="text-xl font-bold text-[#f6c951] flex items-center gap-2">📘 الخبرات</h3>
                <ul class="mt-4 space-y-3 text-gray-300">
                    <li>✔️ تطوير مواقع وتطبيقات ويب متكاملة</li>
                    <li>✔️ بناء أنظمة إدارة المحتوى (CMS)</li>
                    <li>✔️ تصميم واجهات متجاوبة (Responsive)</li>
                    <li>✔️ إعداد ونشر المنصات على السيرفرات</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold text-[#f6c951] flex items-center gap-2">🎓 التعليم</h3>
                <ul class="mt-4 space-y-3 text-gray-300">
                    <li>✔️ بكالوريوس علوم الحاسب</li>
                    <li>✔️ دورات متقدمة في Laravel</li>
                    <li>✔️ شهادات في UX/UI Design</li>
                    <li>✔️ تعلم مستمر وذاتي</li>
                </ul>
            </div>
        </div>

        {{-- رؤية شخصية --}}
        <div class="mt-10 bg-gradient-to-l from-[#f6c951]/10 to-transparent p-6 rounded-2xl border-r-4 border-[#f6c951]">
            <p class="text-gray-200 italic text-lg leading-relaxed">
                "هدفي هو استخدام التكنولوجيا لتسهيل الحياة، وتحويل الأفكار المعقدة إلى منتجات رقمية بسيطة وجميلة."
            </p>
        </div>
    </section>

    {{-- ===== الفوتر ===== --}}
    <footer class="text-center text-gray-500 mt-16 py-8 border-t border-[#f6c951]/10">
        <p>جميع الحقوق محفوظة © أحمد 2026</p>
    </footer>

</body>
</html>