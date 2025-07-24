#!/bin/bash

echo "🧹 Suppression du cache Symfony..."
rm -rf var/cache/*

echo "🧹 Suppression du cache Twig compilé..."
rm -rf var/cache/dev/twig

echo "🔥 Reconstruction du cache..."
php bin/console cache:clear
php bin/console cache:warmup

echo "✅ Symfony est propre. Tu peux relancer le serveur."
