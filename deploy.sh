#!/bin/bash

echo "Starting deployment process..."

# Build the Vue.js frontend
echo "Building Vue.js frontend..."
cd /workspaces/fhrass
npm install
npm run build

# Build the Laravel backend assets
echo "Building Laravel backend assets..."
cd laravel-app
composer install --no-dev --optimize-autoloader
npm install
npm run build

# Set up Laravel for production
echo "Setting up Laravel for production..."
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Deployment completed. Built files are ready in public/ directories."