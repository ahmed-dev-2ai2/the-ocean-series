{{-- resources/views/components/back-to-platform.blade.php --}}
{{-- زر عائم للعودة إلى منصة The Ocean Series --}}

<div 
    id="back-to-platform-btn"
    class="fixed bottom-6 right-6 z-[60] transition-all duration-500 ease-in-out"
    style="direction: rtl;"
>
    <a 
        href="/" 
        class="group relative flex items-center gap-2 px-4 py-3 bg-gradient-to-r from-[#062f47] via-[#0a3d5c] to-[#062f47] hover:from-[#0a3d5c] hover:via-[#062f47] hover:to-[#0a3d5c] text-white font-bold rounded-full shadow-[0_10px_30px_rgba(6,47,71,0.5)] hover:shadow-[0_15px_45px_rgba(6,47,71,0.7)] transition-all duration-300 hover:-translate-y-1 hover:scale-105 border-2 border-[#f6c951]/40"
        aria-label="العودة إلى منصة The Ocean Series"
    >
        <svg class="w-5 h-5 text-[#f6c951] group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
        
        <span class="text-sm hidden sm:inline">المنصة الرئيسية</span>
        
        <span class="absolute -top-1 -right-1 flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#f6c951] opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-[#f6c951] border-2 border-white"></span>
        </span>
    </a>
</div>

<style>
    @media (max-width: 640px) {
        #back-to-platform-btn {
            bottom: 1rem;
            right: 1rem;
        }
        #back-to-platform-btn a {
            padding: 0.6rem 0.9rem !important;
        }
    }
</style>