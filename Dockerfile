# Stage 1: Node untuk build asset
FROM node:20 AS frontend
WORKDIR /app

# copy file config vite + tailwind
COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./

RUN npm install

# copy source code yang dibutuhkan
COPY resources ./resources
COPY public ./public

# build asset
RUN npm run build


# Stage 2: PHP untuk aplikasi
FROM php:8.2-fpm

# install extension php
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
    && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql zip

WORKDIR /var/www

COPY . .

# copy hasil build frontend ke public/build
COPY --from=frontend /app/public/build ./public/build

# izin storage & bootstrap
RUN chmod -R 777 storage bootstrap/cache

# config nginx & supervisor
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

ENV PORT=8080
EXPOSE 8080

CMD ["/usr/bin/supervisord"]
