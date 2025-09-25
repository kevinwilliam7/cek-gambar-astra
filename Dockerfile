# Stage 1: build assets
FROM node:20 AS frontend

WORKDIR /app
COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./
RUN npm install
COPY resources ./resources
COPY public ./public
RUN npm run build

FROM php:8.2-fpm

# Install dependencies (termasuk nginx dan supervisor)
RUN apt-get update && apt-get install -y \
    nginx supervisor \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libpq-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql bcmath zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

# Copy nginx config
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Copy supervisor config
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

EXPOSE $PORT

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
