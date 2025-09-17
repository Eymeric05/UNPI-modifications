FROM php:8.3-fpm

# Installer Nginx
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*


# Copier ton projet PHP dans /usr/share/nginx/html
COPY . /usr/share/nginx/html

# Donner les bons droits à www-data (utilisateur de Nginx et PHP-FPM)
RUN chown -R www-data:www-data /usr/share/nginx/html \
    && chmod -R 755 /usr/share/nginx/html

# Exposer le port 80
EXPOSE 80

# Démarrer PHP-FPM et Nginx ensemble
CMD service php8.3-fpm start && nginx -g "daemon off;"