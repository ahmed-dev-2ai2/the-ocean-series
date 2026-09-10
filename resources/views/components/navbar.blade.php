{{-- resources/views/components/navbar.blade.php --}}
<nav
    x-data="{ mobileMenuOpen: false }"
    role="navigation"
    aria-label="القائمة الرئيسية"
    class="fixed left-0 w-full z-50 bg-[#101820] shadow-lg border-b border-[#f6c951]/10"
    style="top: 42px;"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 h-14 md:h-16 flex items-center justify-between" dir="rtl">

        <a href="/" class="flex items-center focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded-lg p-1" aria-label="الرئيسية - THE OCEAN SERIES">
            <img src="{{ asset('assets/images/logo/logo.png') }}" class="w-14 sm:w-18 md:w-22 hover:scale-105 transition-transform duration-300" alt="شعار THE OCEAN SERIES" loading="lazy">
        </a>

        <ul class="hidden lg:flex gap-5 xl:gap-7 text-white font-bold text-sm xl:text-base items-center">
            <li><a href="/" class="hover:text-[#f6c951] transition-colors duration-300 relative group px-2 py-1">الصفحة الرئيسية <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span></a></li>
            <li><a href="#about" class="hover:text-[#f6c951] transition-colors duration-300 relative group px-2 py-1">نبذة عني <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span></a></li>
            <li><a href="#dashboard" class="hover:text-[#f6c951] transition-colors duration-300 relative group px-2 py-1">لوحة التحكم <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span></a></li>
            <li><a href="#documents" class="hover:text-[#f6c951] transition-colors duration-300 relative group px-2 py-1">المستندات <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span></a></li>
            <li><a href="#follow" class="hover:text-[#f6c951] transition-colors duration-300 relative group px-2 py-1">تابع معي <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span></a></li>

            {{-- 🔥 زر الفيديوهات الذهبي في النافبار --}}
            <li>
                <a href="{{ route('videos.index') }}" class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-gradient-to-r from-amber-400 via-yellow-500 to-amber-500 hover:from-yellow-500 hover:via-amber-400 hover:to-yellow-600 text-[#062f47] font-extrabold rounded-full shadow-[0_4px_15px_rgba(245,158,11,0.35)] hover:shadow-[0_6px_22px_rgba(245,158,11,0.55)] transition-all duration-300 hover:-translate-y-0.5 border border-white/40">
                    <i class="fas fa-video text-sm"></i>
                    الفيديوهات
                </a>
            </li>
        </ul>

        <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-lg hover:bg-[#f6c951]/10 transition-colors duration-300" aria-label="فتح القائمة">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

    </div>

    <div id="mobile-menu" x-show="mobileMenuOpen" x-transition class="lg:hidden bg-[#101820] border-t border-[#f6c951]/20">
        <ul class="flex flex-col items-end px-6 py-4 space-y-3 text-white font-bold text-base">
            <li class="w-full"><a href="/" class="block text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg" @click="mobileMenuOpen = false">الصفحة الرئيسية</a></li>
            <li class="w-full"><a href="#about" class="block text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg" @click="mobileMenuOpen = false">نبذة عني</a></li>
            <li class="w-full"><a href="#dashboard" class="block text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg" @click="mobileMenuOpen = false">لوحة التحكم</a></li>
            <li class="w-full"><a href="#documents" class="block text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg" @click="mobileMenuOpen = false">المستندات</a></li>
            <li class="w-full"><a href="#follow" class="block text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg" @click="mobileMenuOpen = false">تابع معي</a></li>
            <li class="w-full pt-2 border-t border-[#f6c951]/20">
                <a href="{{ route('videos.index') }}" class="block text-center bg-gradient-to-r from-amber-400 to-yellow-500 text-[#062f47] font-extrabold px-4 py-3 rounded-full" @click="mobileMenuOpen = false">
                    🎥 إدارة الفيديوهات
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    [x-cloak] { display: none !important; }
</style>