# ================================
# Stage 1: Build frontend assets
# ================================
FROM node:20 AS frontend
WORKDIR /app

# Copy dependency list dan install
COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./
RUN npm install

# Copy resource Laravel yang dibutuhkan
COPY resources ./resources
COPY public ./public

# Build Vite assets
RUN npm run build


# ================================
# Stage 2: PHP + Nginx + Supervisor
# ================================
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libpq-dev \
    unzip \
    git \
    curl \
    supervisor \
 && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
 && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql zip bcmath \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy source Laravel
COPY . .

# Copy hasil build frontend ke public/build
COPY --from=frontend /app/public/build ./public/build

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader \
 && php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# Permissions untuk Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# Copy konfigurasi Nginx & Supervisor
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Rail
