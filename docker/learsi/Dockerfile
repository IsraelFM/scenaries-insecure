FROM php:7.4-fpm-alpine

RUN apk update --no-cache \
    && apk add \
    icu-dev \
    oniguruma-dev \
    tzdata

RUN docker-php-ext-install pdo_mysql

RUN rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

CMD ["php-fpm"]