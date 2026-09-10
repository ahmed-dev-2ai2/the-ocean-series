{{-- resources/views/components/slider.blade.php --}}
{{-- سلايدر احترافي مع حركة تلقائية وأزرار تحكم --}}

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // =============================================
        // 1. عناصر السلايدر
        // =============================================
        const slides = document.querySelectorAll('.slide-item');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prev-slide');
        const nextBtn = document.getElementById('next-slide');
        let currentSlide = 0;
        let slideInterval;
        const totalSlides = slides.length;

        // =============================================
        // 2. دالة عرض الشريحة
        // =============================================
        function goToSlide(index) {
            slides.forEach(slide => {
                slide.classList.remove('opacity-100', 'scale-100');
                slide.classList.add('opacity-0', 'scale-95');
                slide.style.zIndex = '0';
            });

            slides[index].classList.remove('opacity-0', 'scale-95');
            slides[index].classList.add('opacity-100', 'scale-100');
            slides[index].style.zIndex = '1';

            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.add('bg-[#f6c951]', 'w-8');
                    dot.classList.remove('bg-[#f6c951]/40', 'w-3');
                } else {
                    dot.classList.remove('bg-[#f6c951]', 'w-8');
                    dot.classList.add('bg-[#f6c951]/40', 'w-3');
                }
            });

            currentSlide = index;
            document.getElementById('current-slide-num').textContent = index + 1;
        }

        // =============================================
        // 3. دوال التحرك
        // =============================================
        function nextSlide() {
            let next = (currentSlide + 1) % totalSlides;
            goToSlide(next);
        }

        function prevSlide() {
            let prev = (currentSlide - 1 + totalSlides) % totalSlides;
            goToSlide(prev);
        }

        // =============================================
        // 4. بدء التشغيل التلقائي
        // =============================================
        function startAutoPlay() {
            if (slideInterval) clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoPlay() {
            if (slideInterval) {
                clearInterval(slideInterval);
                slideInterval = null;
            }
        }

        // =============================================
        // 5. أحداث الأزرار
        // =============================================
        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stopAutoPlay();
                nextSlide();
                startAutoPlay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stopAutoPlay();
                prevSlide();
                startAutoPlay();
            });
        }

        // =============================================
        // 6. أحداث النقاط
        // =============================================
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                stopAutoPlay();
                goToSlide(index);
                startAutoPlay();
            });
        });

        // =============================================
        // 7. إيقاف التشغيل عند التمرير
        // =============================================
        const sliderContainer = document.querySelector('.slider-container');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', stopAutoPlay);
            sliderContainer.addEventListener('mouseleave', startAutoPlay);
        }

        // =============================================
        // 8. دعم لوحة المفاتيح
        // =============================================
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowRight') {
                stopAutoPlay();
                nextSlide();
                startAutoPlay();
            } else if (e.key === 'ArrowLeft') {
                stopAutoPlay();
                prevSlide();
                startAutoPlay();
            }
        });

        // =============================================
        // 9. بدء التشغيل
        // =============================================
        goToSlide(0);
        startAutoPlay();

        console.log('✅ السلايدر تم تحميله بنجاح');
    });
</script>
@endpush

{{-- ============================================= --}}
{{-- HTML Structure --}}
{{-- ============================================= --}}

<section id="slider" class="section-padding bg-[#062f47]">
    <div class="container-custom">

        {{-- عنوان القسم (معدل لتمييزه عن معرض الصور الثابت) --}}
        <div class="text-center mb-10 fade-up">
            <span class="badge badge-primary mb-4">📸 صور الحصص</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                لحظات <span class="text-gradient">من الفصول الدراسية</span>
            </h2>
            <p class="mt-4 text-gray-300 max-w-2xl mx-auto">
                صور من الحصص والفعاليات التعليمية
            </p>
        </div>

        {{-- ===== السلايدر ===== --}}
        <div class="slider-container relative rounded-2xl overflow-hidden shadow-2xl" style="aspect-ratio: 16/9; max-height: 600px;">

            {{-- الصور --}}
            <div class="relative w-full h-full bg-[#101820]">
                @php
                    $sliderImages = [
                        'slider1.jpeg',
                        'slider2.jpeg',
                        'slider3.jpeg',
                        'slider4.jpeg',
                        'slider5.jpeg',
                    ];
                @endphp

                @foreach($sliderImages as $index => $image)
                    <div class="slide-item absolute inset-0 transition-all duration-700 ease-in-out opacity-0 scale-95"
                         style="z-index: 0;">
                        <img 
                            src="{{ asset('assets/images/slider/' . $image) }}" 
                            alt="صورة السلايدر {{ $index + 1 }}" 
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#062f47]/60 to-transparent"></div>
                        
                        <div class="absolute bottom-8 left-8 right-8 text-white">
                            <h3 class="text-2xl sm:text-3xl font-bold">
                                @if($index === 0) 🌊 رحلة التعلم تبدأ هنا
                                @elseif($index === 1) 📚 معاً نحو التفوق
                                @elseif($index === 2) 🎯 هدفنا إتقان اللغة
                                @elseif($index === 3) 👨‍🏫 مع أفضل المعلمين
                                @else 🏆 نسعد بنجاحكم
                                @endif
                            </h3>
                            <p class="text-sm sm:text-base text-gray-200 mt-1">THE OCEAN SERIES</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- ===== أزرار التحكم ===== --}}
            <button 
                id="prev-slide"
                class="absolute left-3 top-1/2 transform -translate-y-1/2 z-10 w-10 h-10 sm:w-12 sm:h-12 bg-[#101820]/70 hover:bg-[#f6c951] text-white hover:text-[#062f47] rounded-full flex items-center justify-center transition-all duration-300 backdrop-blur-sm border border-[#f6c951]/30 hover:border-[#f6c951]"
                aria-label="السابق"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <button 
                id="next-slide"
                class="absolute right-3 top-1/2 transform -translate-y-1/2 z-10 w-10 h-10 sm:w-12 sm:h-12 bg-[#101820]/70 hover:bg-[#f6c951] text-white hover:text-[#062f47] rounded-full flex items-center justify-center transition-all duration-300 backdrop-blur-sm border border-[#f6c951]/30 hover:border-[#f6c951]"
                aria-label="التالي"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            {{-- ===== النقاط السفلية ===== --}}
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10 flex gap-2">
                @foreach($sliderImages as $index => $image)
                    <button 
                        class="dot w-3 h-3 rounded-full transition-all duration-300 bg-[#f6c951]/40 hover:bg-[#f6c951] focus:outline-none focus:ring-2 focus:ring-[#f6c951]"
                        aria-label="الذهاب إلى الصورة {{ $index + 1 }}"
                        data-index="{{ $index }}"
                    ></button>
                @endforeach
            </div>

            {{-- ===== عداد الصور ===== --}}
            <div class="absolute bottom-4 right-4 z-10 bg-[#101820]/70 backdrop-blur-sm px-3 py-1 rounded-full text-white text-sm border border-[#f6c951]/20">
                <span id="current-slide-num">1</span> / <span>{{ count($sliderImages) }}</span>
            </div>
        </div>

    </div>
</section>