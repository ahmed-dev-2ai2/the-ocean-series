{{-- resources/views/ahmed/projects.blade.php --}}

@extends('layouts.app')

@section('title', 'مشاريعي | أحمد عبد النبي')

@section('content')
<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#0a1a2e] via-[#062f47] to-[#010407] text-white">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#f6c951]/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#10b981]/10 rounded-full blur-3xl animate-float animation-delay-2000"></div>
    </div>

    {{-- شريط التنقل --}}
    <nav class="relative z-40 bg-[#101820]/80 backdrop-blur-md border-b border-[#f6c951]/20 sticky top-0">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <span class="text-2xl">🌊</span>
                <h1 class="text-xl font-bold text-[#f6c951]">أحمد</h1>
            </div>
            <div class="flex gap-3 md:gap-6 text-xs md:text-base">
                <a href="{{ route('ahmed.home') }}" class="text-gray-300 hover:text-[#f6c951] transition">الرئيسية</a>
                <a href="{{ route('ahmed.about') }}" class="text-gray-300 hover:text-[#f6c951] transition">من أنا</a>
                <a href="{{ route('ahmed.projects') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">المشاريع</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] transition">تواصل معي</a>
            </div>
        </div>
    </nav>

    <section class="relative z-10 container mx-auto px-4 py-16 max-w-6xl">
        
        {{-- العنوان --}}
        <div class="text-center mb-14">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#f6c951] mb-3">مشاريعي 🚀</h1>
            <p class="text-gray-400 text-lg">مجموعة من أعمالي ومشاريعي التي أفخر بها</p>
        </div>

        {{-- شبكة المشاريع --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- المشروع 1: Ocean Series --}}
            <div class="group bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden border border-[#f6c951]/20 hover:border-[#f6c951]/60 hover:-translate-y-2 transition-all duration-300">
                <div class="h-40 bg-gradient-to-br from-[#062f47] to-[#0a3d5c] flex items-center justify-center relative overflow-hidden">
                    <span class="text-7xl group-hover:scale-110 transition-transform duration-500">🌊</span>
                    <span class="absolute top-3 right-3 bg-green-500/90 text-white text-xs font-bold px-3 py-1 rounded-full">✅ مباشر</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-[#f6c951] text-lg mb-2">The Ocean Series</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        منصة تعليمية متكاملة لتعليم اللغة الإنجليزية، مع نظام رفع وعرض الفيديوهات، وواجهات احترافية.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-1 rounded-full text-xs border border-[#f6c951]/30">Laravel</span>
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-1 rounded-full text-xs border border-[#f6c951]/30">Tailwind</span>
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-2 py-1 rounded-full text-xs border border-[#f6c951]/30">SQLite</span>
                    </div>
                    <a href="https://the-ocean-series-production-5451.up.railway.app" target="_blank" 
                       class="inline-flex items-center gap-2 text-[#f6c951] hover:text-white text-sm font-bold transition">
                        <span>زيارة المشروع</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- المشروع 2: Ahmed Portfolio --}}
            <div class="group bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden border border-[#f6c951]/20 hover:border-[#10b981]/60 hover:-translate-y-2 transition-all duration-300">
                <div class="h-40 bg-gradient-to-br from-[#062f47] to-[#0a3d5c] flex items-center justify-center relative overflow-hidden">
                    <span class="text-7xl group-hover:scale-110 transition-transform duration-500">👤</span>
                    <span class="absolute top-3 right-3 bg-green-500/90 text-white text-xs font-bold px-3 py-1 rounded-full">✅ مباشر</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-[#10b981] text-lg mb-2">Ahmed Portfolio</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        موقع شخصي احترافي لعرض المهارات والمشاريع والخبرات، بتصميم عصري ومتجاوب.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-[#10b981]/10 text-[#10b981] px-2 py-1 rounded-full text-xs border border-[#10b981]/30">Laravel</span>
                        <span class="bg-[#10b981]/10 text-[#10b981] px-2 py-1 rounded-full text-xs border border-[#10b981]/30">Tailwind</span>
                    </div>
                    <a href="{{ route('ahmed.home') }}" 
                       class="inline-flex items-center gap-2 text-[#10b981] hover:text-white text-sm font-bold transition">
                        <span>أنت الآن هنا</span>
                        <span>📍</span>
                    </a>
                </div>
            </div>

            {{-- المشروع 3: نظام الجرد --}}
            <div class="group bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden border border-[#f6c951]/20 hover:border-[#38bdf8]/60 hover:-translate-y-2 transition-all duration-300">
                <div class="h-40 bg-gradient-to-br from-[#062f47] to-[#0a3d5c] flex items-center justify-center relative overflow-hidden">
                    <span class="text-7xl group-hover:scale-110 transition-transform duration-500">📊</span>
                    <span class="absolute top-3 right-3 bg-yellow-500/90 text-white text-xs font-bold px-3 py-1 rounded-full">⏳ قيد التطوير</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-[#38bdf8] text-lg mb-2">نظام الجرد المحسّن</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        نظام يربط بين المخزن والمبيعات ومطابقة الأعداد، لتقليل الأخطاء وتحسين الكفاءة.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-[#38bdf8]/10 text-[#38bdf8] px-2 py-1 rounded-full text-xs border border-[#38bdf8]/30">Laravel</span>
                        <span class="bg-[#38bdf8]/10 text-[#38bdf8] px-2 py-1 rounded-full text-xs border border-[#38bdf8]/30">MySQL</span>
                    </div>
                    <span class="text-gray-500 text-sm">قريباً...</span>
                </div>
            </div>

            {{-- المشروع 4: التحول الرقمي --}}
            <div class="group bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden border border-[#f6c951]/20 hover:border-[#38bdf8]/60 hover:-translate-y-2 transition-all duration-300">
                <div class="h-40 bg-gradient-to-br from-[#062f47] to-[#0a3d5c] flex items-center justify-center relative overflow-hidden">
                    <span class="text-7xl group-hover:scale-110 transition-transform duration-500">🔄</span>
                    <span class="absolute top-3 right-3 bg-green-500/90 text-white text-xs font-bold px-3 py-1 rounded-full">✅ منجز</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-[#38bdf8] text-lg mb-2">مشروع التحول الرقمي</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        إدارة تحوّل رقمي لملفات الموظفين، نتج عنه خفض تكاليف الطباعة بنسبة 60%.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-[#38bdf8]/10 text-[#38bdf8] px-2 py-1 rounded-full text-xs border border-[#38bdf8]/30">Digital Transformation</span>
                        <span class="bg-[#38bdf8]/10 text-[#38bdf8] px-2 py-1 rounded-full text-xs border border-[#38bdf8]/30">HR</span>
                    </div>
                    <span class="text-gray-500 text-sm">مشروع مكتمل</span>
                </div>
            </div>

            {{-- المشروع 5: قريباً --}}
            <div class="group bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden border-2 border-dashed border-[#f6c951]/20 hover:border-[#f6c951]/50 transition-all duration-300 flex items-center justify-center min-h-[280px]">
                <div class="text-center p-8">
                    <span class="text-6xl block mb-4 opacity-50">🚀</span>
                    <h3 class="font-bold text-[#f6c951]/70 text-lg mb-2">مشروع جديد قادم</h3>
                    <p class="text-gray-500 text-sm">ترقبوا المزيد...</p>
                </div>
            </div>

        </div>

        {{-- دعوة للتواصل --}}
        <div class="mt-16 text-center">
            <div class="inline-block bg-gradient-to-r from-[#f6c951]/10 via-[#10b981]/10 to-[#38bdf8]/10 backdrop-blur-md p-8 rounded-3xl border border-[#f6c951]/20">
                <h2 class="text-2xl font-bold text-[#f6c951] mb-3">عندك فكرة مشروع؟ 💡</h2>
                <p class="text-gray-300 mb-6">تواصل معي، وسنحوّل فكرتك إلى واقع رقمي ملموس.</p>
                <a href="{{ route('ahmed.contact') }}" 
                   class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-[#f6c951] to-[#f59e0b] hover:from-[#f59e0b] hover:to-[#f6c951] text-[#062f47] font-bold rounded-full shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    💬 ابدأ محادثة الآن
                </a>
            </div>
        </div>

        {{-- زر العودة --}}
        <div class="text-center pt-10">
            <a href="/" class="inline-flex items-center gap-2 text-[#f6c951]/70 hover:text-[#f6c951] transition text-sm">
                ← العودة إلى منصة The Ocean Series
            </a>
        </div>
    </section>
</div>

<style>
    @keyframes float-anim {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -20px) scale(1.05); }
        66% { transform: translate(-20px, 15px) scale(0.95); }
    }
    .animate-float { animation: float-anim 10s ease-in-out infinite; }
    .animation-delay-2000 { animation-delay: 2s; }
</style>
@endsection