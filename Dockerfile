# Étape 1 : Utiliser une image PHP avec les extensions nécessaires
FROM php:8.4-cli

# Étape 2 : Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Étape 3 : Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Étape 4 : Définir le dossier de travail
WORKDIR /app

# Étape 5 : Copier le code source
COPY . /app

# Étape 6 : Installer les dépendances PHP sans scripts
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Étape 7 : Exposer le port utilisé par le serveur PHP
EXPOSE 8000

# Étape 8 : Démarrer le serveur Symfony (adapté à ton projet)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
