FROM php:8.2-fpm

# MySQL extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# install xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
