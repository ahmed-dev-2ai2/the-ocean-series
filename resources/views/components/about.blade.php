{{-- resources/views/components/about.blade.php --}}
<section id="about" class="section-padding bg-[#062f47]">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="fade-up">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#f6c951] to-yellow-400 rounded-3xl blur-2xl opacity-20 animate-pulse"></div>
                    <img src="{{ asset('assets/images/about.jpg') }}" alt="عن المنصة" class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3] border border-[#f6c951]/20" loading="lazy">
                </div>
            </div>

            <div class="fade-up animation-delay-200">
                <span class="badge badge-primary mb-4">👨‍🏫 من نحن</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    <span class="text-gradient">THE OCEAN SERIES</span>
                    <br>مع مستر عبدالسلام رضوان
                </h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    منصة تعليمية متكاملة لتعليم اللغة الإنجليزية، نقدم شرحاً مبسطاً، اختبارات تفاعلية، ومذكرات شاملة لجميع المستويات.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-[#101820] rounded-xl p-4 text-center border border-[#f6c951]/10">
                        <span class="block text-2xl font-bold text-[#f6c951]">8+</span>
                        <span class="text-sm text-gray-400">سنوات خبرة</span>
                    </div>
                    <div class="bg-[#101820] rounded-xl p-4 text-center border border-[#f6c951]/10">
                        <span class="block text-2xl font-bold text-[#f6c951]">5000+</span>
                        <span class="text-sm text-gray-400">طالب مستفيد</span>
                    </div>
                </div>
                <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-[#f6c951] to-yellow-400 text-[#062f47] font-bold rounded-full hover:shadow-lg hover:shadow-[#f6c951]/30 transition-all duration-300 hover:-translate-y-1">
                    📞 تواصل معنا
                </a>
            </div>

        </div>
    </div>
</section>