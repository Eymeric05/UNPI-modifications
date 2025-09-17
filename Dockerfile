# Dockerfile simple pour UNPI - PHP + nginx
FROM php:8.2-fpm-alpine

# Installation de nginx seulement
RUN apk add --no-cache nginx

# Configuration du répertoire de travail
WORKDIR /usr/share/nginx/html

# Copie des fichiers de l'application
COPY . /usr/share/nginx/html/

# Configuration nginx personnalisée
COPY nginx.conf /etc/nginx/nginx.conf

# Configuration PHP-FPM simple pour nginx
RUN echo "user = www-data" > /usr/local/etc/php-fpm.d/www.conf \
    && echo "group = www-data" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "listen = 127.0.0.1:9000" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "pm = dynamic" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "pm.max_children = 5" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "pm.start_servers = 2" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "pm.min_spare_servers = 1" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "pm.max_spare_servers = 3" >> /usr/local/etc/php-fpm.d/www.conf

# Script de démarrage simple
RUN echo '#!/bin/sh' > /start.sh \
    && echo 'echo "Démarrage de PHP-FPM..."' >> /start.sh \
    && echo 'php-fpm -D' >> /start.sh \
    && echo 'echo "Démarrage de nginx..."' >> /start.sh \
    && echo 'nginx -g "daemon off;"' >> /start.sh \
    && chmod +x /start.sh

# Permissions simples
RUN chown -R www-data:www-data /usr/share/nginx/html \
    && chmod -R 755 /usr/share/nginx/html

# Exposition du port
EXPOSE 80

# Commande de démarrage simple
CMD ["/start.sh"]
