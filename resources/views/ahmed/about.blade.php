{{-- resources/views/ahmed/about.blade.php --}}

@extends('layouts.app')

@section('title', 'من أنا | أحمد عبد النبي')

@section('content')
<div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#0a1a2e] via-[#062f47] to-[#010407] text-white">

    {{-- عناصر زخرفية --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#f6c951]/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#10b981]/10 rounded-full blur-3xl animate-float animation-delay-2000"></div>
    </div>

    {{-- شريط التنقل --}}
    <nav class="relative z-40 bg-[#101820]/80 backdrop-blur-md border-b border-[#f6c951]/20 sticky top-0">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <span class="text-2xl">🌊</span>
                <h1 class="text-xl font-bold text-[#f6c951]">أحمد</h1>
            </div>
            <div class="flex gap-3 md:gap-6 text-xs md:text-base">
                <a href="{{ route('ahmed.home') }}" class="text-gray-300 hover:text-[#f6c951] transition">الرئيسية</a>
                <a href="{{ route('ahmed.about') }}" class="text-[#f6c951] font-bold border-b-2 border-[#f6c951] pb-1">من أنا</a>
                <a href="{{ route('ahmed.projects') }}" class="text-gray-300 hover:text-[#f6c951] transition">المشاريع</a>
                <a href="{{ route('ahmed.contact') }}" class="text-gray-300 hover:text-[#f6c951] transition">تواصل معي</a>
            </div>
        </div>
    </nav>

    <section class="relative z-10 container mx-auto px-4 py-12 md:py-16 max-w-5xl">

        {{-- المقدمة --}}
        <div class="grid md:grid-cols-3 gap-8 items-center mb-12">
            <div class="md:col-span-1 flex justify-center">
                <img 
                    src="{{ asset('assets/images/team/ahmed-about.jpg') }}" 
                    alt="أحمد عبد النبي" 
                    class="w-48 h-48 md:w-64 md:h-64 rounded-full object-cover border-4 border-[#f6c951]/40 shadow-2xl"
                >
            </div>
            <div class="md:col-span-2 text-center md:text-right">
                <h1 class="text-3xl md:text-4xl font-extrabold text-[#f6c951] mb-3">أنا أحمد عبد النبي 👋</h1>
                <p class="text-gray-300 text-lg leading-relaxed">
                    أعمل في مجال <strong class="text-[#f6c951]">تطوير الويب</strong>، وأتخصص في <strong class="text-[#f6c951]">التحول الرقمي</strong>. بدأت رحلتي عندما كنت طفلاً أحب الحاسب الآلي والإنترنت والتكنولوجيا.
                </p>
                <blockquote class="mt-5 p-4 border-r-4 border-[#f6c951] bg-white/5 backdrop-blur-sm rounded-lg text-right">
                    <p class="text-gray-200 italic leading-relaxed">
                        "التكنولوجيا والذكاء الاصطناعي ليست أدوات جامدة فقط، بل هي وسيلة لتسهيل الحياة. رسالتي: أن أصنع حياة أسهل وأجمل."
                    </p>
                </blockquote>
            </div>
        </div>

        {{-- الشعار الشخصي --}}
        <div class="mb-12 p-6 bg-gradient-to-l from-[#f6c951]/10 via-[#10b981]/5 to-transparent rounded-2xl border-r-4 border-[#f6c951]">
            <p class="text-2xl md:text-3xl font-bold text-[#f6c951] text-center">
                "من جدّ وجد، ومن زرع حسن" 🌾
            </p>
            <p class="text-center text-sm text-gray-400 mt-2">— شعارى الشخصي</p>
        </div>

        {{-- المؤهلات الأكاديمية --}}
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#f6c951] mb-6 flex items-center gap-3">
                <span>🎓</span> المؤهلات الأكاديمية
            </h2>
            <div class="space-y-4">
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <div class="flex items-start gap-4">
                        <span class="text-3xl">📚</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-[#f6c951] text-lg">بكالوريوس إدارة الأعمال (MIS)</h3>
                            <p class="text-gray-400 text-sm mt-1">كلية التجارة – جامعة جنوب الوادي – سوهاج</p>
                            <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-3 py-1 rounded-full border border-[#f6c951]/30">2013 – 2017م</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <div class="flex items-start gap-4">
                        <span class="text-3xl">👥</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-[#f6c951] text-lg">دبلوم إدارة الأعمال – قسم الموارد البشرية</h3>
                            <p class="text-gray-400 text-sm mt-1">كلية التجارة – جامعة جنوب الوادي</p>
                            <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-3 py-1 rounded-full border border-[#f6c951]/30">2021 – 2023م</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <div class="flex items-start gap-4">
                        <span class="text-3xl">📖</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-[#f6c951] text-lg">دبلوم التربية العامة – نظم العام الواحد</h3>
                            <p class="text-gray-400 text-sm mt-1">كلية التربية – جامعة جنوب الوادي</p>
                            <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-3 py-1 rounded-full border border-[#f6c951]/30">2021 – 2023م</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- الخبرات العملية --}}
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#f6c951] mb-6 flex items-center gap-3">
                <span>💼</span> الخبرات العملية
            </h2>
            <div class="space-y-4">
                <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                        <h3 class="font-bold text-[#f6c951] text-lg">أخصائي فني تنسيق وتركيب الألوان</h3>
                        <span class="text-xs bg-[#f6c951]/10 text-[#f6c951] px-3 py-1 rounded-full border border-[#f6c951]/30">منذ يناير 2021م – حتى الآن</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">🏢 شركة دهانات الجزيرة – توكيل مركز المرعزي لدهانات الكمبيوتر</p>
                    <ul class="space-y-2 text-gray-300 text-sm">
                        <li>🎨 تصميم نموذج لنظام جرد محسّن يربط بين المخزن والمبيعات ومطابقة الأعداد.</li>
                        <li>🔧 مراقبة وصيانة "السوفت وير" الخاص بمكينة إدراج الألوان.</li>
                        <li>⚡ فحص التعبئة وتقليل وقت التوقف عن العمل بنسبة <strong class="text-[#10b981]">30%</strong>.</li>
                        <li>✅ تصنيع وتركيب الألوان، ومراقبة الجودة وتطابقها مع المعايير الفنية.</li>
                    </ul>
                </div>

                <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                        <h3 class="font-bold text-[#f6c951] text-lg">أخصائي إدارة موارد بشرية - أفراد</h3>
                        <span class="text-xs bg-[#f6c951]/10 text-[#f6c951] px-3 py-1 rounded-full border border-[#f6c951]/30">2021 – 2022م</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">🏢 شركة سي سكوب لتنفيذ رحلات الغوص – البحر الأحمر / الغردقة</p>
                    <ul class="space-y-2 text-gray-300 text-sm">
                        <li>📁 إدارة مشروع <strong class="text-[#10b981]">تحوّل رقمي</strong> لملفات الموظفين، نتج عنه خفض تكاليف الطباعة بنسبة <strong class="text-[#10b981]">60%</strong>.</li>
                        <li>⏱️ تقليل وقت إرجاع البيانات من <strong class="text-[#10b981]">20 دقيقة إلى 8 دقائق</strong>.</li>
                        <li>⚡ تقليل وقت التوقف عن العمل بنسبة <strong class="text-[#10b981]">30%</strong>.</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- الدورات والشهادات --}}
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#f6c951] mb-6 flex items-center gap-3">
                <span>🏆</span> الدورات والشهادات التدريبية
            </h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <h3 class="font-bold text-[#f6c951] mb-2">💻 دبلوم تطوير مواقع الويب مفتوح المصدر</h3>
                    <p class="text-gray-400 text-xs">وزارة الاتصالات وتكنولوجيا المعلومات – معهد تكنولوجيا المعلومات (ITI)</p>
                    <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full">مارس – يوليو 2022م</span>
                </div>
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <h3 class="font-bold text-[#f6c951] mb-2">🔄 شهادة أساسيات التحول الرقمي</h3>
                    <p class="text-gray-400 text-xs">المجلس الأعلى للجامعات المصرية – جامعة جنوب الوادي</p>
                    <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full">مارس – أبريل 2021م</span>
                </div>
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <h3 class="font-bold text-[#f6c951] mb-2">📈 شهادة أساسيات التسويق الرقمي</h3>
                    <p class="text-gray-400 text-xs">مهارات من Google – منصة Google للتطوير المهني</p>
                    <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full">أبريل – يونيو 2020م</span>
                </div>
                <div class="bg-white/5 backdrop-blur-md p-5 rounded-2xl border border-[#f6c951]/20 hover:border-[#f6c951]/60 transition">
                    <h3 class="font-bold text-[#f6c951] mb-2">🖥️ الرخصة الدولية لقيادة الحاسب (ICDL Teacher V-5)</h3>
                    <p class="text-gray-400 text-xs">شهادة معتمدة دولياً</p>
                    <span class="inline-block mt-2 text-xs bg-[#f6c951]/10 text-[#f6c951] px-2 py-0.5 rounded-full">نوفمبر 2019م</span>
                </div>
            </div>
        </div>

        {{-- المهارات --}}
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#f6c951] mb-6 flex items-center gap-3">
                <span>⚡</span> المهارات التقنية واللغات
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                
                <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20">
                    <h3 class="font-bold text-[#f6c951] mb-4 flex items-center gap-2">🖥️ البرامج والأدوات</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-3 py-1.5 rounded-full text-sm border border-[#f6c951]/30">Microsoft Office</span>
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-3 py-1.5 rounded-full text-sm border border-[#f6c951]/30">Adobe XD</span>
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-3 py-1.5 rounded-full text-sm border border-[#f6c951]/30">VS Code</span>
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-3 py-1.5 rounded-full text-sm border border-[#f6c951]/30">PowerShell</span>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20">
                    <h3 class="font-bold text-[#f6c951] mb-4 flex items-center gap-2">🌐 تطوير الويب</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-500/10 text-green-400 px-3 py-1.5 rounded-full text-sm border border-green-500/30">HTML 5</span>
                        <span class="bg-blue-500/10 text-blue-400 px-3 py-1.5 rounded-full text-sm border border-blue-500/30">CSS</span>
                        <span class="bg-purple-500/10 text-purple-400 px-3 py-1.5 rounded-full text-sm border border-purple-500/30">Bootstrap</span>
                        <span class="bg-red-500/10 text-red-400 px-3 py-1.5 rounded-full text-sm border border-red-500/30">Laravel</span>
                        <span class="bg-yellow-500/10 text-yellow-400 px-3 py-1.5 rounded-full text-sm border border-yellow-500/30">Python (Basic)</span>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-[#f6c951]/20 md:col-span-2">
                    <h3 class="font-bold text-[#f6c951] mb-4 flex items-center gap-2">🗣️ اللغات</h3>
                    <div class="flex flex-wrap gap-4">
                        <span class="bg-[#f6c951]/10 text-[#f6c951] px-4 py-1.5 rounded-full text-sm border border-[#f6c951]/30">العربية (اللغة الأم)</span>
                        <span class="bg-blue-500/10 text-blue-400 px-4 py-1.5 rounded-full text-sm border border-blue-500/30">الإنجليزية (B1)</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- زر العودة --}}
        <div class="text-center pt-6">
            <a href="/" class="inline-flex items-center gap-2 text-[#f6c951]/70 hover:text-[#f6c951] transition text-sm">
                ← العودة إلى منصة The Ocean Series
            </a>
        </div>
    </section>
</div>

<style>
    @keyframes float-anim {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -20px) scale(1.05); }
        66% { transform: translate(-20px, 15px) scale(0.95); }
    }
    .animate-float { animation: float-anim 10s ease-in-out infinite; }
    .animation-delay-2000 { animation-delay: 2s; }
</style>
@endsection