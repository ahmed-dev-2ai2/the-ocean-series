{{-- resources/views/components/features.blade.php --}}
<section class="section-padding bg-[#101820]">
    <div class="container-custom">
        <div class="text-center mb-16 fade-up">
            <span class="badge badge-primary mb-4">✨ مميزات المنصة</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                لماذا <span class="text-gradient">THE OCEAN SERIES</span>؟
            </h2>
            <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
                نقدم لك تجربة تعليمية متكاملة تجمع بين أحدث الأساليب والتقنيات
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $features = [
                    ['icon' => '📚', 'title' => 'شرح مبسط', 'desc' => 'دروس فيديو عالية الجودة مع شرح تفصيلي لكل النقاط', 'color' => 'from-blue-500 to-blue-600', 'badge' => 'الأكثر مشاهدة'],
                    ['icon' => '📝', 'title' => 'اختبارات تفاعلية', 'desc' => 'اختبر مستواك من خلال اختبارات متنوعة مع نتائج فورية', 'color' => 'from-green-500 to-emerald-500', 'badge' => 'تقييم ذاتي'],
                    ['icon' => '📖', 'title' => 'مذكرات شاملة', 'desc' => 'مذكرات PDF قابلة للتحميل تغطي جميع المناهج', 'color' => 'from-purple-500 to-purple-600', 'badge' => 'قابلة للتحميل'],
                    ['icon' => '👨‍🏫', 'title' => 'متابعة مستمرة', 'desc' => 'متابعة شخصية من المعلم لتقييم الأداء وتحسينه', 'color' => 'from-orange-500 to-red-500', 'badge' => 'دعم فوري'],
                    ['icon' => '🎯', 'title' => 'خطط دراسية', 'desc' => 'خطوط زمنية منظمة تساعدك على تحقيق أهدافك', 'color' => 'from-pink-500 to-rose-500', 'badge' => 'مخصصة'],
                    ['icon' => '🏆', 'title' => 'شهادات معتمدة', 'desc' => 'احصل على شهادات إتمام معتمدة بعد اجتياز الدورات', 'color' => 'from-yellow-500 to-amber-500', 'badge' => 'معترف بها'],
                ];
            @endphp
            @foreach($features as $index => $feature)
                <div class="card group fade-up delay-{{ ($index % 3) + 1 }}">
                    @if($feature['badge'])
                        <span class="inline-block mb-4 badge badge-primary text-xs">{{ $feature['badge'] }}</span>
                    @endif
                    <div class="w-16 h-16 bg-gradient-to-br {{ $feature['color'] }} rounded-2xl flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        {{ $feature['icon'] }}
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#f6c951] transition-colors">{{ $feature['title'] }}</h3>
                    <p class="text-gray-400 leading-relaxed">{{ $feature['desc'] }}</p>
                    <div class="mt-5 w-12 h-1 bg-gradient-to-r from-[#f6c951] to-yellow-400 rounded-full group-hover:w-full transition-all duration-500"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-[#f6c951]/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
            @endforeach
        </div>

        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="card fade-up delay-1 p-6">
                <span class="block text-4xl font-bold text-[#f6c951] counter" data-target="8000">0+</span>
                <span class="text-gray-400 mt-2">طالب مستفيد</span>
            </div>
            <div class="card fade-up delay-2 p-6">
                <span class="block text-4xl font-bold text-[#f6c951] counter" data-target="8">0+</span>
                <span class="text-gray-400 mt-2">سنوات خبرة</span>
            </div>
            <div class="card fade-up delay-3 p-6">
                <span class="block text-4xl font-bold text-[#f6c951] counter" data-target="150">0+</span>
                <span class="text-gray-400 mt-2">فيديو تعليمي</span>
            </div>
            <div class="card fade-up delay-4 p-6">
                <span class="block text-4xl font-bold text-[#f6c951] counter" data-target="98">0%</span>
                <span class="text-gray-400 mt-2">نسبة الرضا</span>
            </div>
        </div>
    </div>
</section>