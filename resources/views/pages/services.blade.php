@extends('layouts.app')

@section('title', 'خدماتي الاحترافية | THE OCEAN SERIES')

@section('content')
<section class="py-16 bg-gradient-to-b from-[#062f47] to-[#101820]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white">💼 خدماتي الاحترافية</h1>
            <p class="text-gray-300 mt-4 text-lg">أقدم لك حلولاً تقنية متكاملة بجودة عالية وأسعار تنافسية</p>
        </div>

        <!-- بطاقات الخدمات -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-[#1a2533] p-8 rounded-2xl shadow-xl hover:scale-105 transition border border-[#f6c951]/20">
                <span class="text-5xl">🌐</span>
                <h3 class="text-2xl font-bold text-white mt-4">تصميم وتطوير مواقع الويب</h3>
                <p class="text-gray-400 mt-2">أستخدم أحدث التقنيات مثل Laravel، Vue.js، وTailwind CSS لبناء مواقع سريعة وجميلة.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="bg-blue-600/20 text-blue-400 px-3 py-1 rounded-full text-sm">Laravel</span>
                    <span class="bg-purple-600/20 text-purple-400 px-3 py-1 rounded-full text-sm">Tailwind</span>
                    <span class="bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-sm">Vue.js</span>
                </div>
            </div>

            <div class="bg-[#1a2533] p-8 rounded-2xl shadow-xl hover:scale-105 transition border border-[#f6c951]/20">
                <span class="text-5xl">🐛</span>
                <h3 class="text-2xl font-bold text-white mt-4">حل المشاكل البرمجية والـ Debugging</h3>
                <p class="text-gray-400 mt-2">أقوم بتحليل وإصلاح الأخطاء البرمجية في مشاريعك الحالية، وتحسين أدائها واستقرارها.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="bg-red-600/20 text-red-400 px-3 py-1 rounded-full text-sm">Debug</span>
                    <span class="bg-orange-600/20 text-orange-400 px-3 py-1 rounded-full text-sm">Performance</span>
                </div>
            </div>

            <div class="bg-[#1a2533] p-8 rounded-2xl shadow-xl hover:scale-105 transition border border-[#f6c951]/20">
                <span class="text-5xl">📚</span>
                <h3 class="text-2xl font-bold text-white mt-4">بناء منصات تعليمية متكاملة</h3>
                <p class="text-gray-400 mt-2">أنشئ منصة تعليمية شبيهة بـ THE OCEAN SERIES، مع إدارة الدروس والفيديوهات والطلاب.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="bg-yellow-600/20 text-yellow-400 px-3 py-1 rounded-full text-sm">LMS</span>
                    <span class="bg-cyan-600/20 text-cyan-400 px-3 py-1 rounded-full text-sm">Video</span>
                </div>
            </div>
        </div>

        <!-- طريقة الدفع -->
        <div class="mt-16 bg-[#1a2533] p-8 rounded-2xl border border-[#f6c951]/30 max-w-2xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-[#f6c951]">💳 طريقة الدفع</h3>
            <p class="text-gray-300 mt-2">الدفع عبر <span class="text-white font-bold">فوري / Easy Pay</span>5078086720251094</p>
            <p class="text-3xl font-bold text-white mt-2">📱 01112465676</p>
            <p class="text-sm text-gray-400 mt-2">(أرسل صورة الإيصال على واتساب بعد الدفع)</p>
            <div class="flex justify-center gap-4 mt-6">
                <a href="https://wa.me/20112465676" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full transition">📲 واتساب</a>
                <a href="ahmed.abdelnaby.log@gmail.com" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-full transition">✉️ إيميل</a>
            </div>
        </div>

        <!-- مشروع نموذجي: THE OCEAN SERIES -->
        <div class="mt-16 bg-[#0f172a] p-8 rounded-2xl border border-[#f6c951]/20">
            <h3 class="text-2xl font-bold text-[#f6c951] text-center mb-4">🌊 مشروعي النموذجي</h3>
            <p class="text-gray-300 text-center">هذا هو مشروع THE OCEAN SERIES الذي قمت بتطويره بالكامل، وهو مثال حي على جودة عملي.</p>
            <div class="text-center mt-4">
                <a href="https://the-ocean-series-production.up.railway.app" target="_blank" class="bg-[#f6c951] text-[#062f47] font-bold px-8 py-3 rounded-full hover:bg-yellow-400 transition">
                    🔗 زيارة المشروع
                </a>
            </div>
        </div>
    </div>
</section>
@endsection