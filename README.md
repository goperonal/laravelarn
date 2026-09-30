# ARN & Affiliates – Law Firm Website

Website resmi firma hukum **ARN & Affiliates**, berbasis di Samarinda, Kalimantan Timur.

**Live**: [https://arnaffiliates.com](https://arnaffiliates.com)

## Tech Stack

- **Framework**: Laravel 10 + Filament v3
- **CMS**: Filament Fabricator (page builder) + Curator (media manager)
- **Frontend**: Blade templates + Tailwind CSS + Alpine.js
- **Database**: MySQL 8
- **Server**: Nginx + PHP 8.3-FPM

## Setup

```bash
# Clone
git clone git@github.com:goperonal/laravelarn.git
cd laravelarn

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate

# Edit .env with your DB credentials
# DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# Run migrations
php artisan migrate

# Storage link
php artisan storage:link

# Clear cache
php artisan view:clear
```

## Deployment Notes

- `.env` is excluded from version control — configure per environment.
- Media assets are managed via Filament Curator and stored in `storage/app/public`.
- OG image for social sharing: `public/og-image.png` (1200x630).
- SSL via Let's Encrypt (certbot).

## License

Proprietary – PT Rawguna Inovasi Nusantara. All rights reserved.
