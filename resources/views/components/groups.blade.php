{{-- resources/views/components/groups.blade.php --}}
<section id="groups" class="section-padding bg-[#101820]">
    <div class="container-custom">
        <div class="text-center mb-12 fade-up">
            <span class="badge badge-primary mb-4">👥 المجموعات</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                انضم إلى <span class="text-gradient">مجموعتنا</span>
            </h2>
            <p class="mt-4 text-gray-400 max-w-2xl mx-auto">اختر المجموعة المناسبة لمستواك وابدأ رحلتك التعليمية</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $groups = [
                    ['name' => 'المبتدئين', 'level' => 'A1-A2', 'students' => '1,200', 'icon' => '🌱', 'color' => 'from-green-500 to-emerald-500'],
                    ['name' => 'المتوسطين', 'level' => 'B1-B2', 'students' => '850', 'icon' => '🌿', 'color' => 'from-blue-500 to-blue-600'],
                    ['name' => 'المتقدمين', 'level' => 'C1-C2', 'students' => '450', 'icon' => '🌳', 'color' => 'from-purple-500 to-purple-600'],
                ];
            @endphp
            @foreach($groups as $group)
                <div class="card group fade-up text-center">
                    <div class="w-20 h-20 bg-gradient-to-br {{ $group['color'] }} rounded-2xl flex items-center justify-center text-4xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        {{ $group['icon'] }}
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">{{ $group['name'] }}</h3>
                    <p class="text-sm text-gray-400 mb-3">المستوى: {{ $group['level'] }}</p>
                    <p class="text-sm text-gray-400 mb-4">👨‍🎓 {{ $group['students'] }} طالب</p>
                    <a href="#booking" class="inline-flex items-center gap-2 px-6 py-2 bg-gradient-to-r from-[#f6c951] to-yellow-400 text-[#062f47] font-bold rounded-full hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        🚀 انضم الآن
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>