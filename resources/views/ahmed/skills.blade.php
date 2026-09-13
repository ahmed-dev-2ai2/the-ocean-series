<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أحمد | مهاراتي</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: 'Cairo', sans-serif; }
        .skill-bar { transition: width 1.5s ease-in-out; }
    </style>
</head>
<body class="bg-gradient-to-br from-[#0a1a2e] via-[#062f47] to-[#010407] text-white min-h-screen">

    {{-- شريط التنقل --}}
    <nav class="bg-[#101820]/90 backdrop-blur-md shadow-lg py-4 px-6 sticky top-0 z-50 border-b border-[#f6c951]/20">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-[#f6c951]">أحمد</h1>
            <div class="flex gap-3 md:gap-5 flex-wrap text-sm md:text-base">
                <a href="{{ route('ahmed.home') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">الرئيسية</a>
                <a href="{{ route('ahmed.about') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">من أنا</a>
                <a href="{{ route('ahmed.skills') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">مهاراتي</a>
                <a href="{{ route('ahmed.projects') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">مشاريعي</a>
                <a href="{{ route('ahmed.gallery') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">معرضي</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">اتصل بي</a>
            </div>
        </div>
    </nav>

    {{-- المحتوى --}}
    <section class="max-w-5xl mx-auto mt-12 p-6">
        <h2 class="text-4xl font-bold text-center text-[#f6c951] mb-3">مهاراتي</h2>
        <p class="text-center text-gray-400 mb-12">التقنيات والأدوات التي أستخدمها في مشاريعي</p>

        {{-- المهارات التقنية --}}
        <div class="grid md:grid-cols-2 gap-6">
            @php
                $skills = [
                    ['name' => 'HTML / CSS', 'level' => 95, 'color' => 'from-orange-500 to-red-500'],
                    ['name' => 'JavaScript', 'level' => 85, 'color' => 'from-yellow-400 to-amber-500'],
                    ['name' => 'PHP / Laravel', 'level' => 90, 'color' => 'from-red-500 to-pink-600'],
                    ['name' => 'Tailwind CSS', 'level' => 92, 'color' => 'from-cyan-400 to-blue-500'],
                    ['name' => 'Vite / NPM', 'level' => 80, 'color' => 'from-purple-500 to-indigo-600'],
                    ['name' => 'Git / GitHub', 'level' => 85, 'color' => 'from-gray-500 to-gray-700'],
                    ['name' => 'MySQL / SQLite', 'level' => 82, 'color' => 'from-blue-500 to-cyan-600'],
                    ['name' => 'Docker', 'level' => 75, 'color' => 'from-sky-500 to-blue-600'],
                ];
            @endphp

            @foreach($skills as $skill)
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/50 transition-all duration-300">
                    <div class="flex justify-between items-center mb-3">
                        <span class="font-bold text-lg">{{ $skill['name'] }}</span>
                        <span class="text-[#f6c951] font-bold">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-700/50 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full bg-gradient-to-r {{ $skill['color'] }}" style="width: {{ $skill['level'] }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- المهارات الشخصية --}}
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-[#f6c951] mb-6 text-center">🌟 المهارات الشخصية</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white/5 p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:bg-[#f6c951]/10 transition">
                    <div class="text-4xl mb-2">🧠</div>
                    <p class="font-bold text-sm">تفكير تحليلي</p>
                </div>
                <div class="bg-white/5 p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:bg-[#f6c951]/10 transition">
                    <div class="text-4xl mb-2">🎯</div>
                    <p class="font-bold text-sm">إدارة الوقت</p>
                </div>
                <div class="bg-white/5 p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:bg-[#f6c951]/10 transition">
                    <div class="text-4xl mb-2">🤝</div>
                    <p class="font-bold text-sm">العمل الجماعي</p>
                </div>
                <div class="bg-white/5 p-5 rounded-2xl border border-[#f6c951]/20 text-center hover:bg-[#f6c951]/10 transition">
                    <div class="text-4xl mb-2">📚</div>
                    <p class="font-bold text-sm">التعلم المستمر</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-gray-500 mt-16 py-8 border-t border-[#f6c951]/10">
        <p>جميع الحقوق محفوظة © أحمد 2026</p>
    </footer>

</body>
</html>