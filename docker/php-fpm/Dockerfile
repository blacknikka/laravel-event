FROM php:fpm-buster

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV PATH "$PATH:/var/www/html/vendor/bin"
