{{-- resources/views/components/top-bar.blade.php --}}
{{-- شريط علوي دوّار (Carousel) – بديل احترافي لشريط الأخبار --}}

<div 
    x-data="{
        currentIndex: 0,
        totalMessages: 3,
        visible: true,
        paused: false,
        touchStartX: 0,
        touchEndX: 0,
        messages: [
            { icon: '📢', text: 'تحديثات المنصة: جاري التطوير المستمر لإضافة مزايا جديدة', link: null },
            { icon: '🎥', text: 'تم تفعيل خاصية رفع وعرض الفيديوهات بنجاح', link: '/videos' },
            { icon: '⚙️', text: 'المنصة حالياً في مرحلة التشغيل التجريبي (Demo) وجاري التحديث', link: null }
        ],
        init() {
            if (localStorage.getItem('topBarClosed') === 'true') {
                this.visible = false;
            }
            setInterval(() => {
                if (!this.paused && this.visible) {
                    this.next();
                }
            }, 6000);
        },
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.totalMessages;
        },
        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.totalMessages) % this.totalMessages;
        },
        goTo(index) {
            this.currentIndex = index;
        },
        close() {
            this.visible = false;
            localStorage.setItem('topBarClosed', 'true');
        },
        handleTouchStart(e) {
            this.touchStartX = e.changedTouches[0].screenX;
        },
        handleTouchEnd(e) {
            this.touchEndX = e.changedTouches[0].screenX;
            const diff = this.touchStartX - this.touchEndX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) this.next();
                else this.prev();
            }
        }
    }"
    x-init="init()"
    x-show="visible"
    x-cloak
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-y-full"
    @mouseenter="paused = true"
    @mouseleave="paused = false"
    @touchstart="handleTouchStart($event)"
    @touchend="handleTouchEnd($event)"
    class="fixed top-0 left-0 w-full z-[70] bg-gradient-to-l from-[#0f172a] via-[#1a2332] to-[#0f172a] border-b-2 border-[#f6c951]/30 shadow-lg"
    style="height: 48px; direction: rtl;"
>
    <div class="relative h-full w-full flex items-center justify-between px-2 sm:px-4">
        
        {{-- زر السابق (يمين في RTL) --}}
        <button 
            @click="prev()" 
            class="flex-shrink-0 p-1.5 rounded-full text-[#f6c951]/60 hover:text-[#f6c951] hover:bg-[#f6c951]/10 transition-all duration-200 focus:outline-none"
            aria-label="الرسالة السابقة"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
        
        {{-- منطقة الرسائل (الوسط) --}}
        <div class="flex-1 relative h-full flex items-center justify-center overflow-hidden px-2">
            <template x-for="(msg, index) in messages" :key="index">
                <div 
                    x-show="currentIndex === index"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-3"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300 absolute inset-0 flex items-center justify-center"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-3"
                    class="w-full flex items-center justify-center gap-1.5 text-center"
                >
                    <span class="text-sm flex-shrink-0" x-text="msg.icon"></span>
                    <template x-if="msg.link">
                        <a :href="msg.link" 
                           class="text-[#facc15] hover:text-[#f6c951] text-[11px] sm:text-sm font-medium transition-colors duration-200 underline decoration-dotted underline-offset-4 truncate">
                            <span x-text="msg.text"></span>
                        </a>
                    </template>
                    <template x-if="!msg.link">
                        <span class="text-[#facc15] text-[11px] sm:text-sm font-medium truncate" x-text="msg.text"></span>
                    </template>
                </div>
            </template>
        </div>
        
        {{-- منطقة الأزرار اليسرى (التالي + إغلاق) --}}
        <div class="flex-shrink-0 flex items-center gap-0.5">
            <button 
                @click="next()" 
                class="p-1.5 rounded-full text-[#f6c951]/60 hover:text-[#f6c951] hover:bg-[#f6c951]/10 transition-all duration-200 focus:outline-none"
                aria-label="الرسالة التالية"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button 
                @click="close()" 
                class="p-1.5 rounded-full text-[#f6c951]/40 hover:text-red-400 hover:bg-red-500/10 transition-all duration-200 focus:outline-none"
                aria-label="إغلاق الشريط"
            >
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
    
    {{-- مؤشرات النقاط (أسفل الشريط) --}}
    <div class="absolute bottom-0.5 left-1/2 -translate-x-1/2 flex gap-1">
        <template x-for="(msg, i) in messages" :key="i">
            <button 
                @click="goTo(i)"
                :class="currentIndex === i 
                    ? 'w-4 bg-[#f6c951]' 
                    : 'w-1.5 bg-[#f6c951]/40 hover:bg-[#f6c951]/70'"
                class="h-1 rounded-full transition-all duration-300"
                :aria-label="`الرسالة ${i + 1}`"
            ></button>
        </template>
    </div>
</div>

