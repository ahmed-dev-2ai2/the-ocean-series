{{-- resources/views/ahmed/home.blade.php --}}

@extends('layouts.app')

@section('title', 'أحمد عبد النبي | خبير تقني ومطور')

@section('content')
<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#0a1a2e] via-[#062f47] to-[#010407] text-white">

    {{-- عناصر زخرفية --}}
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
                <a href="{{ route('ahmed.home') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">الرئيسية</a>
                <a href="{{ route('ahmed.about') }}" class="text-gray-300 hover:text-[#f6c951] transition">من أنا</a>
                <a href="{{ route('ahmed.projects') }}" class="text-gray-300 hover:text-[#f6c951] transition">المشاريع</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] transition">تواصل معي</a>
            </div>
        </div>
    </nav>

    {{-- المحتوى --}}
    <section class="relative z-10 container mx-auto px-4 py-16 md:py-24">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            {{-- النص --}}
            <div class="text-center md:text-right order-2 md:order-1">
                <span class="inline-block px-5 py-2 mb-5 text-sm font-bold text-[#f6c951] bg-[#f6c951]/10 border border-[#f6c951]/30 rounded-full">
                    💼 خبير تقني | مطور | مسوّق رقمي
                </span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    <span class="text-white">أهلاً ومرحباً بكم</span>
                    <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-[#f6c951] to-yellow-400">
                        👋
                    </span>
                </h1>

                <p class="mt-6 text-lg md:text-xl text-gray-300 leading-relaxed">
                    سعيد بزيارتكم لمساحتي الرقمية، حيث أدمج بين البرمجة والتسويق لأصنع تجارب رقمية متكاملة.
                </p>

                {{-- الشعار الشخصي --}}
                <div class="mt-6 p-4 bg-gradient-to-l from-[#f6c951]/10 to-transparent rounded-2xl border-r-4 border-[#f6c951] text-right">
                    <p class="text-xl md:text-2xl font-bold text-[#f6c951]">
                        "من جدّ وجد، ومن زرع حسن" 🌾
                    </p>
                    <p class="text-xs text-gray-400 mt-1">— شعارى الشخصي</p>
                </div>

                {{-- الرؤية --}}
                <blockquote class="mt-6 p-5 bg-white/5 backdrop-blur-sm rounded-lg">
                    <p class="text-base md:text-lg italic text-gray-200 leading-relaxed">
                        "خبير تقني أدمج بين البرمجة والتسويق الرقمي، أبني تجارب رقمية متكاملة، هدفي الاحتراف والتطوير والتأثير الفعّال."
                    </p>
                </blockquote>

                {{-- الأزرار --}}
                <div class="mt-8 flex flex-wrap gap-4 justify-center md:justify-start">
                    <a href="{{ route('ahmed.projects') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-[#f6c951] to-[#f59e0b] hover:from-[#f59e0b] hover:to-[#f6c951] text-[#062f47] font-bold rounded-full shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        🚀 شوف مشاريعي
                    </a>
                    <a href="{{ route('ahmed.contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold rounded-full border-2 border-white/20 hover:border-[#f6c951] hover:-translate-y-1 transition-all duration-300">
                        💬 تواصل معي
                    </a>
                </div>
            </div>

            {{-- الصورة --}}
            <div class="order-1 md:order-2 flex justify-center">
                <div class="relative w-full max-w-sm">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#f6c951] to-[#10b981] rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                    <img 
                        src="{{ asset('assets/images/team/ahmed-abdelnaby.jpg') }}" 
                        alt="أحمد عبد النبي" 
                        class="relative rounded-3xl shadow-2xl w-full object-cover aspect-square border-4 border-[#f6c951]/30"
                        loading="lazy"
                    >
                    {{-- بطاقة عائمة --}}
                    <div class="absolute -bottom-4 -left-4 bg-[#101820] border border-[#f6c951]/30 rounded-xl shadow-xl p-4 flex items-center gap-3">
                        <span class="text-3xl">⭐</span>
                        <div>
                            <p class="font-bold text-[#f6c951] text-sm">خبير تقني</p>
                            <p class="text-xs text-gray-400">+8 سنوات خبرة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- الإحصائيات --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16 max-w-4xl mx-auto">
            <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:border-[#f6c951]/60 transition">
                <div class="text-3xl font-bold text-[#f6c951]">+20</div>
                <div class="text-sm text-gray-400 mt-1">مشروع منجز</div>
            </div>
            <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:border-[#10b981]/60 transition">
                <div class="text-3xl font-bold text-[#10b981]">+8</div>
                <div class="text-sm text-gray-400 mt-1">سنوات خبرة</div>
            </div>
            <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:border-[#38bdf8]/60 transition">
                <div class="text-3xl font-bold text-[#38bdf8]">+50</div>
                <div class="text-sm text-gray-400 mt-1">عميل سعيد</div>
            </div>
            <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:border-[#f6c951]/60 transition">
                <div class="text-3xl font-bold text-[#f6c951]">+100</div>
                <div class="text-sm text-gray-400 mt-1">استشارة تقنية</div>
            </div>
        </div>
    </section>

    {{-- زر العودة للمنصة --}}
    <div class="relative z-10 text-center pb-10">
        <a href="/" class="inline-flex items-center gap-2 text-[#f6c951]/70 hover:text-[#f6c951] transition text-sm">
            ← العودة إلى منصة The Ocean Series
        </a>
    </div>
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