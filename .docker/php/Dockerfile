FROM php:8.0-fpm-alpine

RUN apk add --no-cache libpng libjpeg-turbo libwebp freetype icu

RUN \
    apk add --no-cache --virtual build-essentials \
    icu-dev icu-libs g++ make automake autoconf \
    libpng-dev libwebp-dev libjpeg-turbo-dev freetype-dev && \
    docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp && \
    docker-php-ext-install pdo pdo_mysql gd intl && \
    apk del build-essentials && rm -rf /usr/src/php*

COPY composer.json composer.lock ./

RUN wget https://getcomposer.org/composer-stable.phar \
    -O /usr/local/bin/composer && chmod +x /usr/local/bin/composer && \
    composer install --no-dev --no-scripts

ENV PATH="/var/www/html/:${PATH}"

COPY ./ ./

RUN chown -R www-data storage

VOLUME [ "/var/www/html/storage" ]

RUN composer dump && rm /usr/local/bin/composer
