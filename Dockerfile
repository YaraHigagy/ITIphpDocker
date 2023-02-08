FROM php:8.1-apache

RUN apt-get update

COPY ./ITIphpDocker /var/www/html

EXPOSE 8088
