{{-- resources/views/components/gallery.blade.php --}}
{{-- معرض الصور الثابت --}}

<section id="gallery" class="section-padding bg-[#062f47]">
    <div class="container-custom">
        <div class="text-center mb-16 fade-up">
            <span class="badge badge-primary mb-4">🖼️ المعرض الثابت</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                لحظات <span class="text-gradient">من رحلتنا</span>
            </h2>
            <p class="mt-4 text-gray-300 max-w-2xl mx-auto">صور وفيديوهات من الحصص والفعاليات التعليمية</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @php
                $galleryItems = [
                    ['type' => 'image', 'src' => 'gallery1.jpg', 'alt' => 'صورة 1'],
                    ['type' => 'image', 'src' => 'gallery2.jpg', 'alt' => 'صورة 2'],
                    ['type' => 'video', 'src' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'alt' => 'فيديو 1'],
                    ['type' => 'image', 'src' => 'gallery3.jpg', 'alt' => 'صورة 3'],
                    ['type' => 'image', 'src' => 'gallery4.jpg', 'alt' => 'صورة 4'],
                    ['type' => 'video', 'src' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'alt' => 'فيديو 2'],
                    ['type' => 'image', 'src' => 'gallery5.jpg', 'alt' => 'صورة 5'],
                    ['type' => 'image', 'src' => 'gallery6.jpg', 'alt' => 'صورة 6'],
                ];
            @endphp
            @foreach($galleryItems as $item)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-1 fade-up" style="aspect-ratio: 1/1">
                    @if($item['type'] === 'video')
                        <iframe src="{{ $item['src'] }}" class="w-full h-full object-cover" allowfullscreen loading="lazy" title="{{ $item['alt'] }}"></iframe>
                    @else
                        <img src="{{ asset('assets/images/' . $item['src']) }}" alt="{{ $item['alt'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-[#062f47] to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-end justify-center p-4">
                        <span class="text-white font-bold text-sm">@if($item['type'] === 'video') ▶️ تشغيل الفيديو @else 🔍 عرض الصورة @endif</span>
                    </div>
                    <div class="absolute top-3 right-3 w-8 h-8 bg-[#101820]/80 rounded-full flex items-center justify-center text-white text-sm backdrop-blur-sm">
                        @if($item['type'] === 'video') ▶️ @else 🖼️ @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>