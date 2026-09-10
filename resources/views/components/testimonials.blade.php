{{-- resources/views/components/testimonials.blade.php --}}
<section id="testimonials" class="section-padding bg-[#101820]">
    <div class="container-custom">
        <div class="text-center mb-16 fade-up">
            <span class="badge badge-primary mb-4">💬 آراء طلابنا</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                ماذا يقول <span class="text-gradient">طلابنا</span> عنا؟
            </h2>
            <p class="mt-4 text-gray-400 max-w-2xl mx-auto">آراء حقيقية من طلاب استفادوا من منصة THE OCEAN SERIES</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $testimonials = [
                    ['name' => 'أحمد محمد', 'role' => 'طالب ثانوية عامة', 'content' => 'فضلًا بعد الله، منصة THE OCEAN SERIES غيرت مستواي في اللغة الإنجليزية تمامًا.', 'rating' => 5, 'image' => 'student1.jpg', 'date' => 'يناير 2026'],
                    ['name' => 'سارة خالد', 'role' => 'طالبة جامعية', 'content' => 'أفضل منصة تعليمية تعاملت معها. الاختبارات التفاعلية والمذكرات ساعدوني كثيرًا.', 'rating' => 5, 'image' => 'student2.jpg', 'date' => 'فبراير 2026'],
                    ['name' => 'محمد علي', 'role' => 'مهندس برمجيات', 'content' => 'كنت أعاني من ضعف في اللغة الإنجليزية، ولكن بفضل الله ثم بفضل مستر عبدالسلام، أصبحت أتحدث بثقة.', 'rating' => 5, 'image' => 'student3.jpg', 'date' => 'مارس 2026'],
                ];
            @endphp
            @foreach($testimonials as $testimonial)
                <div class="bg-[#1a2533] rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 fade-up border border-[#f6c951]/10 hover:border-[#f6c951]/30 group">
                    <div class="flex items-center gap-4 mb-5">
                        <img src="{{ asset('assets/images/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-16 h-16 rounded-full object-cover border-2 border-[#f6c951] group-hover:border-yellow-400 transition-colors" loading="lazy">
                        <div>
                            <h4 class="font-bold text-white text-lg group-hover:text-[#f6c951] transition-colors">{{ $testimonial['name'] }}</h4>
                            <p class="text-sm text-gray-400">{{ $testimonial['role'] }}</p>
                            <p class="text-xs text-gray-500">{{ $testimonial['date'] }}</p>
                        </div>
                    </div>
                    <div class="flex text-[#f6c951] mb-4">
                        @for($i = 0; $i < $testimonial['rating']; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-300 leading-relaxed text-lg">"{{ $testimonial['content'] }}"</p>
                    <div class="mt-4 text-6xl text-[#f6c951]/10 font-serif leading-none">"</div>
                </div>
            @endforeach
        </div>
    </div>
</section>