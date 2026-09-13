{{-- resources/views/ahmed/contact.blade.php --}}

@extends('layouts.app')

@section('title', 'تواصل معي | أحمد عبد النبي')

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
                <a href="{{ route('ahmed.projects') }}" class="text-gray-300 hover:text-[#f6c951] transition">المشاريع</a>
                <a href="{{ route('ahmed.contact') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">تواصل معي</a>
            </div>
        </div>
    </nav>

    {{-- المحتوى --}}
    <section class="relative z-10 container mx-auto px-4 py-16 max-w-4xl">
        
        {{-- العنوان --}}
        <div class="text-center mb-14">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#f6c951] mb-3">تواصل معي 📬</h1>
            <p class="text-gray-400 text-lg">سعيد بتواصلك، اختر الوسيلة الأنسب لك</p>
        </div>

        {{-- بطاقات التواصل --}}
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            
            {{-- واتساب --}}
            <a href="https://wa.me/201112465676" target="_blank" rel="noopener noreferrer"
               class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl border-2 border-[#f6c951]/20 hover:border-[#25D366] hover:-translate-y-2 transition-all duration-300 text-center">
                <div class="text-5xl mb-3 group-hover:scale-110 transition-transform duration-300">💬</div>
                <h3 class="font-bold text-[#f6c951] mb-1">واتساب</h3>
                <p class="text-gray-400 text-sm" dir="ltr">+20 111 246 5676</p>
                <span class="inline-block mt-3 text-xs text-[#25D366] opacity-0 group-hover:opacity-100 transition">اضغط للمحادثة ←</span>
            </a>

            {{-- البريد --}}
            <a href="mailto:Ahmed.dev.team.ai@gmail.com" 
               class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl border-2 border-[#f6c951]/20 hover:border-[#f6c951] hover:-translate-y-2 transition-all duration-300 text-center">
                <div class="text-5xl mb-3 group-hover:scale-110 transition-transform duration-300">✉️</div>
                <h3 class="font-bold text-[#f6c951] mb-1">البريد الإلكتروني</h3>
                <p class="text-gray-400 text-xs break-all">Ahmed.dev.team.ai@gmail.com</p>
                <span class="inline-block mt-3 text-xs text-[#f6c951] opacity-0 group-hover:opacity-100 transition">اضغط للإرسال ←</span>
            </a>

            {{-- LinkedIn --}}
            <a href="https://www.linkedin.com/in/ahmed--abdelnaby" target="_blank" rel="noopener noreferrer"
               class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl border-2 border-[#f6c951]/20 hover:border-[#0a66c2] hover:-translate-y-2 transition-all duration-300 text-center">
                <div class="text-5xl mb-3 group-hover:scale-110 transition-transform duration-300">💼</div>
                <h3 class="font-bold text-[#f6c951] mb-1">LinkedIn</h3>
                <p class="text-gray-400 text-sm">أحمد عبد النبي</p>
                <span class="inline-block mt-3 text-xs text-[#0a66c2] opacity-0 group-hover:opacity-100 transition">اضغط للزيارة ←</span>
            </a>
        </div>

        {{-- معلومات إضافية --}}
        <div class="bg-white/5 backdrop-blur-md p-8 rounded-2xl border border-[#f6c951]/20">
            <h2 class="text-2xl font-bold text-[#f6c951] mb-6 text-center">📞 معلومات سريعة</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="flex items-center justify-center gap-3 bg-[#f6c951]/5 p-4 rounded-xl border border-[#f6c951]/20">
                    <span class="text-3xl">📍</span>
                    <div>
                        <p class="text-xs text-gray-400">الموقع</p>
                        <p class="font-bold">الأقصر، مصر</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-3 bg-[#10b981]/5 p-4 rounded-xl border border-[#10b981]/20">
                    <span class="text-3xl">⏰</span>
                    <div>
                        <p class="text-xs text-gray-400">متاح</p>
                        <p class="font-bold">9 صباحاً – 9 مساءً</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 pt-6 border-t border-[#f6c951]/10 text-center">
                <p class="text-gray-300 text-lg mb-2">🌟 هل لديك مشروع في ذهنك؟</p>
                <p class="text-gray-400 text-sm">تواصل معي الآن، ودعنا نحوّل فكرتك إلى واقع رقمي ملموس.</p>
                <a href="https://wa.me/201112465676" target="_blank" 
                   class="inline-flex items-center gap-2 mt-5 px-8 py-3 bg-gradient-to-r from-[#25D366] to-[#128C7E] hover:from-[#128C7E] hover:to-[#25D366] text-white font-bold rounded-full shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <span class="text-xl">💬</span>
                    ابدأ محادثة واتساب
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