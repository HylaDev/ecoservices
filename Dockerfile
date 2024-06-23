# Utiliser une image de base officielle PHP avec Apache
FROM php:8.2-apache

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers de configuration Apache
COPY ./docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# Activer le module de réécriture d'URL d'Apache
RUN a2enmod rewrite

# Copier les fichiers de l'application Symfony
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer les dépendances PHP avec Composer
RUN composer install --no-dev --optimize-autoloader

# Changer les permissions du répertoire de cache et de logs
RUN chown -R www-data:www-data /var/www/html/var

# Exposer le port 80
EXPOSE 80

# Commande pour démarrer Apache
CMD ["apache2-foreground"]
