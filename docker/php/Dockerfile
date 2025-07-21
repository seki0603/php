FROM php:8.2-fpm

COPY php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www
