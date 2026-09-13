<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أحمد | اتصل بي</title>
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
                <a href="{{ route('ahmed.gallery') }}" class="text-gray-300 hover:text-[#f6c951] font-medium transition">معرضي</a>
                <a href="{{ route('ahmed.contact') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">اتصل بي</a>
            </div>
        </div>
    </nav>

    {{-- المحتوى --}}
    <section class="max-w-4xl mx-auto mt-12 p-6">
        <h2 class="text-4xl font-bold text-center text-[#f6c951] mb-3">اتصل بي</h2>
        <p class="text-center text-gray-400 mb-12">يمكنك التواصل معي عبر الطرق التالية</p>

        <div class="grid md:grid-cols-3 gap-6 mb-10">
            {{-- الهاتف --}}
            <a href="tel:+201111168104" class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 hover:-translate-y-1 transition-all duration-300 text-center">
                <div class="text-5xl mb-3 group-hover:scale-110 transition">📞</div>
                <h3 class="font-bold text-[#f6c951] mb-1">الهاتف</h3>
                <p class="text-gray-300 text-sm" dir="ltr">+20 111 116 8104</p>
            </a>

            {{-- الإيميل --}}
            <a href="mailto:ahmed.dev.team.ai@gmail.com" class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 hover:-translate-y-1 transition-all duration-300 text-center">
                <div class="text-5xl mb-3 group-hover:scale-110 transition">✉️</div>
                <h3 class="font-bold text-[#f6c951] mb-1">البريد الإلكتروني</h3>
                <p class="text-gray-300 text-sm break-all">ahmed.dev.team.ai@gmail.com</p>
            </a>

            {{-- واتساب --}}
            <a href="https://wa.me/201111168104" target="_blank" class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 hover:-translate-y-1 transition-all duration-300 text-center">
                <div class="text-5xl mb-3 group-hover:scale-110 transition">💬</div>
                <h3 class="font-bold text-[#f6c951] mb-1">واتساب</h3>
                <p class="text-gray-300 text-sm">تواصل مباشر</p>
            </a>
        </div>

        {{-- نموذج التواصل --}}
        <div class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-[#f6c951]/20">
            <h3 class="text-xl font-bold text-[#f6c951] mb-4">أرسل لي رسالة</h3>
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <input type="text" placeholder="الاسم" class="w-full bg-[#062f47]/50 border border-[#f6c951]/20 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#f6c951] transition">
                <input type="email" placeholder="البريد الإلكتروني" class="w-full bg-[#062f47]/50 border border-[#f6c951]/20 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#f6c951] transition">
                <textarea rows="4" placeholder="رسالتك..." class="w-full bg-[#062f47]/50 border border-[#f6c951]/20 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#f6c951] transition resize-none"></textarea>
                <button type="submit" class="w-full bg-gradient-to-r from-[#f6c951] via-yellow-500 to-[#f59e0b] hover:from-yellow-500 hover:to-yellow-600 text-[#062f47] font-extrabold py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    🚀 إرسال الرسالة
                </button>
            </form>
        </div>
    </section>

    <footer class="text-center text-gray-500 mt-16 py-8 border-t border-[#f6c951]/10">
        <p>جميع الحقوق محفوظة © أحمد 2026</p>
    </footer>

</body>
</html>