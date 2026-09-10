{{-- resources/views/components/contact.blade.php --}}
<section id="contact" class="section-padding bg-[#062f47]">
    <div class="container-custom">
        <div class="text-center mb-16 fade-up">
            <span class="badge badge-primary mb-4">📞 تواصل معنا</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                كن <span class="text-gradient">على تواصل</span> معنا
            </h2>
            <p class="mt-4 text-gray-300 max-w-2xl mx-auto">نرحب بأسئلتك واستفساراتك، فريقنا جاهز للرد عليك في أقرب وقت</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="bg-[#101820] rounded-3xl p-8 shadow-xl border border-[#f6c951]/10 fade-up">
                <h3 class="text-2xl font-bold text-white mb-6">أرسل رسالتك</h3>
                
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-300 mb-2">الاسم الكامل <span class="text-[#f6c951]">*</span></label>
                        <input type="text" id="name" name="name" required placeholder="أدخل اسمك الكامل" class="w-full px-5 py-3 bg-[#1a2533] border border-[#f6c951]/20 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:border-transparent transition-all duration-300">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">البريد الإلكتروني <span class="text-[#f6c951]">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="example@domain.com" class="w-full px-5 py-3 bg-[#1a2533] border border-[#f6c951]/20 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:border-transparent transition-all duration-300">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-300 mb-2">رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone" placeholder="0123456789" class="w-full px-5 py-3 bg-[#1a2533] border border-[#f6c951]/20 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:border-transparent transition-all duration-300">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-300 mb-2">الموضوع <span class="text-[#f6c951]">*</span></label>
                        <select id="subject" name="subject" required class="w-full px-5 py-3 bg-[#1a2533] border border-[#f6c951]/20 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:border-transparent transition-all duration-300">
                            <option value="">اختر الموضوع</option>
                            <option value="inquiry">استفسار عام</option>
                            <option value="course">استفسار عن دورات</option>
                            <option value="payment">مشكلة في الدفع</option>
                            <option value="technical">مشكلة تقنية</option>
                            <option value="other">أخرى</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-300 mb-2">الرسالة <span class="text-[#f6c951]">*</span></label>
                        <textarea id="message" name="message" required rows="5" placeholder="اكتب رسالتك هنا..." class="w-full px-5 py-3 bg-[#1a2533] border border-[#f6c951]/20 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:border-transparent transition-all duration-300 resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-[#f6c951] to-yellow-400 text-[#062f47] font-bold rounded-full hover:shadow-lg hover:shadow-[#f6c951]/30 transition-all duration-300 hover:-translate-y-1">
                        📨 إرسال الرسالة
                    </button>
                </form>
            </div>

            <div class="space-y-8 fade-up animation-delay-200">
                <div class="bg-[#101820] rounded-3xl p-8 shadow-xl border border-[#f6c951]/10">
                    <h3 class="text-2xl font-bold text-white mb-6">معلومات الاتصال</h3>
                    <div class="space-y-5">
                        <div class="flex items-center gap-4 p-4 bg-[#1a2533] rounded-xl hover:bg-[#1f2c3d] transition-colors">
                            <div class="w-12 h-12 bg-[#f6c951]/10 rounded-xl flex items-center justify-center text-2xl">✉️</div>
                            <div>
                                <p class="text-sm text-gray-400">البريد الإلكتروني</p>
                                <a href="mailto:abdohanafi011111@gmail.com" class="text-white hover:text-[#f6c951] transition-colors">abdohanafi011111@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-[#1a2533] rounded-xl hover:bg-[#1f2c3d] transition-colors">
                            <div class="w-12 h-12 bg-[#f6c951]/10 rounded-xl flex items-center justify-center text-2xl">📱</div>
                            <div>
                                <p class="text-sm text-gray-400">رقم الهاتف</p>
                                <a href="tel:+2011111168104" class="text-white hover:text-[#f6c951] transition-colors">01111168104</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-[#1a2533] rounded-xl hover:bg-[#1f2c3d] transition-colors">
                            <div class="w-12 h-12 bg-[#f6c951]/10 rounded-xl flex items-center justify-center text-2xl">💬</div>
                            <div>
                                <p class="text-sm text-gray-400">واتساب</p>
                                <div class="flex gap-3">
                                    <a href="https://wa.me/2011111168104" target="_blank" class="text-white hover:text-[#25D366] transition-colors">01111168104</a>
                                    <span class="text-gray-500">|</span>
                                    <a href="https://wa.me/201027635545" target="_blank" class="text-white hover:text-[#25D366] transition-colors">01027635545</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-[#1a2533] rounded-xl hover:bg-[#1f2c3d] transition-colors">
                            <div class="w-12 h-12 bg-[#f6c951]/10 rounded-xl flex items-center justify-center text-2xl">📍</div>
                            <div>
                                <p class="text-sm text-gray-400">العنوان</p>
                                <p class="text-white">البلينا - سوهاج - جمهورية مصر العربية</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#101820] rounded-3xl p-8 shadow-xl border border-[#f6c951]/10">
                    <h4 class="text-lg font-bold text-white mb-4">تابعنا على</h4>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/share/19EzddwcQG/" target="_blank" class="w-14 h-14 bg-[#1877F2]/10 rounded-2xl flex items-center justify-center text-2xl text-[#1877F2] hover:bg-[#1877F2] hover:text-white transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://wa.me/2011111168104" target="_blank" class="w-14 h-14 bg-[#25D366]/10 rounded-2xl flex items-center justify-center text-2xl text-[#25D366] hover:bg-[#25D366] hover:text-white transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.youtube.com/@THEOCEANSERIES" target="_blank" class="w-14 h-14 bg-[#FF0000]/10 rounded-2xl flex items-center justify-center text-2xl text-[#FF0000] hover:bg-[#FF0000] hover:text-white transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://t.me/THEOCEANSERIES" target="_blank" class="w-14 h-14 bg-[#0088CC]/10 rounded-2xl flex items-center justify-center text-2xl text-[#0088CC] hover:bg-[#0088CC] hover:text-white transition-all duration-300 hover:-translate-y-1 shadow-lg"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>