# Deployment Guide for FHRASS

## Prerequisites
- Node.js and npm installed
- PHP 8.1+ with Composer
- Database configured (SQLite by default in .env)

## Step-by-Step Deployment

### 1. Build Frontend (Vue.js)
```bash
cd /workspaces/fhrass
npm install
npm run build
```

### 2. Build Backend (Laravel)
```bash
cd /workspaces/fhrass/laravel-app
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

### 3. Setup Laravel for Production
```bash
cd /workspaces/fhrass/laravel-app
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 4. Start the Application
```bash
# Development server
php artisan serve

# For production, use a proper web server like nginx or Apache
```

## Output Directories
- Frontend build: `/workspaces/fhrass/dist/`
- Laravel assets: `/workspaces/fhrass/laravel-app/public/build/`

## Environment Configuration
The `.env` file is already configured with:
- Database: SQLite (database.sqlite)
- Cache: Database
- Session: Database
- Queue: Database

For production deployment, update:
- `APP_DEBUG=false`
- `APP_ENV=production`
- Database connection settings
- Mail configuration
- API keys and secrets
