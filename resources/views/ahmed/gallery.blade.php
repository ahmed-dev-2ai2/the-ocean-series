<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أحمد | معرضي</title>
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
                <a href="{{ route('ahmed.projects') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">مشاريعي</a>
                <a href="{{ route('ahmed.gallery') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">معرضي</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">اتصل بي</a>
            </div>
        </div>
    </nav>

    {{-- المحتوى --}}
    <section class="max-w-6xl mx-auto mt-12 p-6">
        <h2 class="text-4xl font-bold text-center text-[#f6c951] mb-3">معرضي</h2>
        <p class="text-center text-gray-400 mb-12">لقطات من مشاريعي وأعمالي</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @for($i = 1; $i <= 9; $i++)
                <div class="group relative overflow-hidden rounded-2xl border-2 border-[#f6c951]/20 hover:border-[#f6c951]/60 transition-all duration-300 cursor-pointer">
                    <img src="https://picsum.photos/seed/ahmed{{ $i }}/600/600" 
                         alt="معرض الصور {{ $i }}" 
                         class="w-full h-48 md:h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#062f47] via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <span class="text-white font-bold text-sm">مشروع رقم {{ $i }}</span>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <footer class="text-center text-gray-500 mt-16 py-8 border-t border-[#f6c951]/10">
        <p>جميع الحقوق محفوظة © أحمد 2026</p>
    </footer>

</body>
</html>