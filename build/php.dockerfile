FROM php:7.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install git -y

RUN curl -O https://getcomposer.org/composer.phar && \
    mv composer.phar /usr/local/bin/composer && \
    chmod 755 /usr/local/bin/composer

RUN composer install