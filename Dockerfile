FROM php:8.2-apache

# Install GD, Zip, and pdo_mysql extensions
RUN apt-get update && \
    apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        default-mysql-client \
    && docker-php-ext-install -j$(nproc) gd zip pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Copy your application files
COPY ./src /var/www/html

# Set Apache document root
WORKDIR /var/www/html
