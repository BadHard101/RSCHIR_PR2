# образ Apache и php
FROM php:8.0-apache

WORKDIR /var/www/html/

COPY . .

# ставим MySQLi расширение для PHP для работы с бд
RUN docker-php-ext-install mysqli

EXPOSE 80
