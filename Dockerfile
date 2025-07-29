# Étape 1 : base PHP avec extensions nécessaires
FROM php:8.2-cli

# Étape 2 : installation des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Étape 3 : installation de Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Étape 4 : création du dossier de l'app
WORKDIR /app

# Étape 5 : copie du code
COPY . /app

# Étape 6 : installation des dépendances PHP sans scripts
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Étape 7 : port exposé (à adapter si tu utilises Symfony server)
EXPOSE 8000

# Étape 8 : commande de démarrage (à adapter selon ton app)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
