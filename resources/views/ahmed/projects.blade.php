<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أحمد | مشاريعي</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>body { font-family: 'Cairo', sans-serif; }</style>
</head>
<body class="bg-gradient-to-br from-[#0a1a2e] via-[#062f47] to-[#010407] text-white min-h-screen">

    {{-- شريط التنقل --}}
    <nav class="bg-[#101820]/90 backdrop-blur-md shadow-lg py-4 px-6 sticky top-0 z-50 border-b border-[#f6c951]/20">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-[#f6c951]">أحمد</h1>
            <div class="flex gap-3 md:gap-5 flex-wrap text-sm md:text-base">
                <a href="{{ route('ahmed.home') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">الرئيسية</a>
                <a href="{{ route('ahmed.about') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">من أنا</a>
                <a href="{{ route('ahmed.skills') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">مهاراتي</a>
                <a href="{{ route('ahmed.projects') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">مشاريعي</a>
                <a href="{{ route('ahmed.gallery') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">معرضي</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">اتصل بي</a>
            </div>
        </div>
    </nav>

    {{-- المحتوى --}}
    <section class="max-w-6xl mx-auto mt-12 p-6">
        <h2 class="text-4xl font-bold text-center text-[#f6c951] mb-3">مشاريعي</h2>
        <p class="text-center text-gray-400 mb-12">مجموعة من أعمالي الأخيرة في مجال تطوير الويب</p>

        @php
            $projects = [
                ['title' => 'منصة The Ocean Series', 'desc' => 'منصة تعليمية متكاملة لمستر عبد السلام رضوان لتعليم اللغة الإنجليزية، تحتوي على رفع وعرض الفيديوهات.', 'icon' => '🌊', 'tech' => ['Laravel', 'Tailwind', 'SQLite'], 'link' => 'https://the-ocean-series-production-5451.up.railway.app'],
                ['title' => 'Portfolio Ahmed', 'desc' => 'موقع شخصي لعرض المهارات والمشاريع، مصمم بواجهة عصرية ومتجاوبة.', 'icon' => '👤', 'tech' => ['Laravel', 'Tailwind'], 'link' => '#'],
                ['title' => 'نظام إدارة المهام', 'desc' => 'تطبيق ويب لإدارة المهام اليومية مع إمكانية التصنيف والتنبيهات.', 'icon' => '📋', 'tech' => ['Laravel', 'MySQL'], 'link' => '#'],
                ['title' => 'متجر إلكتروني', 'desc' => 'متجر لبيع المنتجات مع سلة تسوق ونظام دفع تجريبي.', 'icon' => '🛒', 'tech' => ['Laravel', 'Stripe'], 'link' => '#'],
            ];
        @endphp

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($projects as $project)
                <div class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-[#f6c951]/20 hover:border-[#f6c951]/60 hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="text-5xl mb-3">{{ $project['icon'] }}</div>
                        @if($project['link'] !== '#')
                            <a href="{{ $project['link'] }}" target="_blank" class="text-[#f6c951] hover:text-white transition" title="زيارة المشروع">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-[#f6c951] mb-2">{{ $project['title'] }}</h3>
                    <p class="text-gray-300 leading-relaxed text-sm">{{ $project['desc'] }}</p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach($project['tech'] as $t)
                            <span class="bg-[#f6c951]/10 text-[#f6c951] px-3 py-1 rounded-full text-xs border border-[#f6c951]/30">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="text-center text-gray-500 mt-16 py-8 border-t border-[#f6c951]/10">
        <p>جميع الحقوق محفوظة © أحمد 2026</p>
    </footer>

</body>
</html>