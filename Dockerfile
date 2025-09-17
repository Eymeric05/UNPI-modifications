FROM php:8.3-fpm

RUN rm -rf /usr/share/nginx/html/*

# Copier ton projet PHP
COPY . /usr/share/nginx/html

# Donner les bons droits à www-data (utilisateur de Nginx et PHP-FPM)
RUN chown -R www-data:www-data /usr/share/nginx/html \
    && chmod -R 755 /usr/share/nginx/html