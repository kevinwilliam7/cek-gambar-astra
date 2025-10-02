# Stage 1: build assets
FROM node:20 AS frontend

WORKDIR /app
COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./
RUN npm install
COPY resources ./resources
COPY public ./public
RUN npm run build


# Stage 2: PHP + Nginx
FROM php:8.2-fpm

WORKDIR /var/www
COPY . .

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx supervisor \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libpq-dev \
    unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql bcmath zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Copy hasil build Vite terakhir (supaya tidak ketiban public/)
COPY --from=frontend /app/public/build ./public/build

# Copy nginx & supervisor configs
COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Permission
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose Railway port
ENV PORT=8080
EXPOSE 8080
EXPOSE $PORT

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
