# AKSIT Global Laravel Website

Modern, responsive IT company website for **AKSIT Global** built with Laravel + Blade + TailwindCSS + Alpine.js.

## Features
- Multi-page professional website (Home, About, Services, Training, Careers, Contact)
- Reusable Blade components (header/navigation, footer, hero, cards, forms)
- Contact, training inquiry, and career application forms stored in MySQL
- Admin authentication and dashboard to review submissions
- SEO-friendly meta titles/descriptions/Open Graph tags
- Laravel MVC architecture with validation, CSRF protection, and caching

## Tech Stack
- Laravel 11 (PHP)
- MySQL
- Blade templating
- TailwindCSS
- Alpine.js

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Database Tables
- `contacts`
- `career_applications`
- `training_enquiries`
- `users` (for admin login)

## Notes
- Create an admin user manually via seeder or Tinker.
- Production deployment should run `php artisan optimize` and configure cache/session drivers appropriately.
