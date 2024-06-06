# Utiliser l'image PHP officielle comme base
FROM php:8.0-apache

# Installer les dépendances requises pour Laravel
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Copier le code source de l'application Laravel
COPY . /var/www/html

# Installer les dépendances Composer
RUN composer install --no-dev --optimize-autoloader

# Générer la clé d'application Laravel
RUN php artisan key:generate

# Configurer les autorisations du fichier
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80 pour l'accès HTTP
EXPOSE 80

# Lancer le serveur Apache
CMD ["apache2-foreground"]
