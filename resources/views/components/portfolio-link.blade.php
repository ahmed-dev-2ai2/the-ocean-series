{{-- resources/views/components/portfolio-link.blade.php --}}
{{-- زر عائم احترافي للانتقال إلى موقع أحمد Portfolio --}}

{{-- ✅ الزر العائم (يظهر في زاوية الشاشة) --}}
<div 
    x-data="{ 
        visible: false,
        show() { this.visible = true; },
        hide() { this.visible = false; }
    }"
    x-init="setTimeout(() => show(), 3000)"
    class="fixed bottom-6 left-6 z-[60]"
    style="direction: rtl;"
>
    {{-- الزر الرئيسي --}}
    <a 
        href="https://ahmed-portfolio.com" 
        target="_blank"
        rel="noopener noreferrer"
        @mouseenter="hide()"
        class="group relative flex items-center gap-2 px-5 py-3 bg-gradient-to-r from-[#f6c951] via-[#fbbf24] to-[#f59e0b] hover:from-[#f59e0b] hover:via-[#f6c951] hover:to-[#fbbf24] text-[#062f47] font-extrabold rounded-full shadow-[0_10px_30px_rgba(245,158,11,0.45)] hover:shadow-[0_15px_45px_rgba(245,158,11,0.65)] transition-all duration-300 hover:-translate-y-1 hover:scale-105 border-2 border-white/40"
        aria-label="زيارة موقع المطور أحمد"
    >
        {{-- الأيقونة --}}
        <svg class="w-5 h-5 transition-transform duration-300 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        
        <span class="text-sm">موقع المطور</span>
        
        {{-- نقطة وامضة لجذب الانتباه --}}
        <span class="absolute -top-1 -right-1 flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500 border-2 border-white"></span>
        </span>
    </a>
    
    {{-- تلميح (Tooltip) --}}
    <div class="absolute bottom-full left-0 mb-2 w-56 p-3 bg-[#101820] text-white text-xs rounded-xl shadow-2xl border border-[#f6c951]/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="direction: rtl;">
        <p class="font-bold text-[#f6c951] mb-1">👋 مرحباً!</p>
        <p class="text-gray-300 leading-relaxed">تعرف على مطوّر هذه المنصة، وتصفح أعماله ومشاريعه.</p>
    </div>
</div>

{{-- ✅ رابط في الفوتر --}}
<div class="hidden md:block text-center py-3 text-sm text-gray-500 border-t border-gray-200 mt-6">
    <span>صُممت وطُوّرت بواسطة </span>
    <a 
        href="https://ahmed-portfolio.com" 
        target="_blank" 
        rel="noopener noreferrer"
        class="text-[#f6c951] hover:text-[#f59e0b] font-bold transition-colors duration-300 underline decoration-dotted underline-offset-4"
    >
        أحمد عبد النبي
    </a>
    <span> 💚</span>
</div>

<style>
    /* تحسين الزر على الموبايل */
    @media (max-width: 640px) {
        .fixed.bottom-6.left-6 a {
            padding: 0.6rem 1rem;
            font-size: 0.8rem;
        }
        .fixed.bottom-6.left-6 a span:not(.text-sm) {
            display: none;
        }
    }
</style>