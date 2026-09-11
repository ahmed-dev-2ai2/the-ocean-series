FROM php:8.2-cli

# ===== تثبيت الاعتماديات الأساسية + Node.js 20 =====
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libsqlite3-dev \
    zip \
    unzip \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# ===== تثبيت إضافات PHP (بما فيها SQLite) =====
RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd zip

# ===== تثبيت Composer =====
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ===== تعيين مجلد العمل =====
WORKDIR /var/www/html

# ===== نسخ ملفات المشروع =====
COPY . .

# ===== تثبيت حزم PHP (بدون حزم التطوير) =====
RUN composer install --no-dev --optimize-autoloader --no-interaction

# ===== تثبيت حزم Node.js وبناء Vite =====
RUN npm install && npm run build

# ===== إنشاء مجلدات Laravel وضبط الصلاحيات =====
RUN mkdir -p database \
    storage/framework/sessions \
    storage/framework/views \
    storage/framework/cache \
    storage/logs \
    bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache database

# ===== تعيين المنفذ =====
EXPOSE 8080

# ===== أمر التشغيل =====
CMD php artisan config:clear; \
    php artisan route:clear; \
    php artisan view:clear; \
    touch database/database.sqlite; \
    php artisan migrate --force; \
    php artisan storage:link; \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8080}