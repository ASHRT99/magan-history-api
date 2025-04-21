# Use the official PHP 8 image with Apache
FROM php:8.1-apache

# Enable mod_rewrite (important for clean URLs)
RUN a2enmod rewrite

# Copy project files into the Apache root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Optional: install MySQL client if you connect to external DB
RUN docker-php-ext-install mysqli

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html
