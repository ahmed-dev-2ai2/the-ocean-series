{{-- resources/views/components/cards.blade.php --}}
<section class="section-padding bg-[#062f47]">
    <div class="container-custom">
        <div class="text-center mb-16 fade-up">
            <span class="badge badge-primary mb-4">📋 بطاقات المحتوى</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">اكتشف <span class="text-gradient">محتوى مميز</span></h2>
            <p class="mt-4 text-gray-300 max-w-2xl mx-auto">مجموعة متنوعة من البطاقات لعرض المحتوى بشكل جذاب ومنظم</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card group fade-up">
                <div class="relative overflow-hidden rounded-xl h-56 mb-5">
                    <img src="{{ asset('assets/images/card1.jpg') }}" alt="صورة البطاقة" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#101820] to-transparent opacity-60"></div>
                    <span class="absolute top-4 right-4 badge badge-primary">جديد</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#f6c951] transition-colors">عنوان البطاقة</h3>
                <p class="text-gray-400 leading-relaxed mb-4">وصف مختصر للبطاقة يوضح المحتوى المقدم بشكل جذاب ومشوق للمستخدم.</p>
                <div class="flex items-center justify-between">
                    <span class="text-[#f6c951] font-bold group-hover:translate-x-1 transition-transform">اقرأ المزيد →</span>
                    <span class="text-sm text-gray-500">⭐ 4.8</span>
                </div>
            </div>

            <div class="card group fade-up delay-2 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-[#f6c951] to-yellow-400 rounded-2xl flex items-center justify-center text-4xl mx-auto mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">📘</div>
                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#f6c951] transition-colors">مذكرات شاملة</h3>
                <p class="text-gray-400 leading-relaxed mb-5">مذكرات PDF قابلة للتحميل تغطي جميع المناهج الدراسية بشكل منظم ومبسط.</p>
                <div class="flex justify-center gap-3">
                    <span class="badge badge-primary">PDF</span>
                    <span class="badge badge-info">تحميل</span>
                </div>
            </div>

            <div class="card group fade-up delay-4">
                <div class="flex items-center gap-4 mb-5">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#f6c951] to-yellow-400 rounded-xl flex items-center justify-center text-2xl">📝</div>
                    <div>
                        <h3 class="text-xl font-bold text-white group-hover:text-[#f6c951] transition-colors">قائمة المهام</h3>
                        <p class="text-sm text-gray-400">5 مهام مكتملة</p>
                    </div>
                </div>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-center gap-3"><span class="text-[#f6c951]">✅</span><span>مراجعة الدرس الأول</span></li>
                    <li class="flex items-center gap-3"><span class="text-[#f6c951]">✅</span><span>حل الاختبار الأول</span></li>
                    <li class="flex items-center gap-3"><span class="text-gray-500">⏳</span><span class="text-gray-500">مراجعة الدرس الثاني</span></li>
                    <li class="flex items-center gap-3"><span class="text-gray-500">⏳</span><span class="text-gray-500">حل الاختبار الثاني</span></li>
                </ul>
                <div class="mt-5 w-full bg-[#101820] rounded-full h-2">
                    <div class="bg-gradient-to-r from-[#f6c951] to-yellow-400 h-2 rounded-full" style="width: 40%"></div>
                </div>
                <p class="mt-2 text-sm text-gray-400 text-left">40% مكتمل</p>
            </div>
        </div>
    </div>
</section>