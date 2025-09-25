# Gunakan PHP base image
FROM php:8.2-cli

# Install dependency system untuk GD, database, zip, dll.
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    unzip git curl \
 && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
 && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql bcmath zip \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer dari official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy semua file project ke dalam container
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Cache config & routes untuk production
RUN php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# Expose port Railway
EXPOSE 8080

# Jalankan Laravel server
CMD php artisan serve --host=0.0.0.0 --port=${PORT}
