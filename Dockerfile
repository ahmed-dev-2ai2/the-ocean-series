FROM php:8.2-fpm

# تثبيت الاعتماديات الأساسية
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && rm -rf /var/lib/apt/lists/*

# تثبيت إضافات PHP المطلوبة
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تعيين مجلد العمل
WORKDIR /var/www/html

# نسخ جميع ملفات المشروع
COPY . .

# تثبيت حزم PHP (بدون حزم التطوير)
RUN composer install --no-dev --optimize-autoloader

# تثبيت حزم Node.js وبناء Vite
RUN npm install && npm run build

# تعيين المنفذ الذي سيعمل عليه التطبيق (مطابق لما في CMD)
EXPOSE 8080

# أمر التشغيل (منفذ ثابت لتجنب أي تعارض مع متغيرات Railway)
CMD php artisan serve --host=0.0.0.0 --port=8080