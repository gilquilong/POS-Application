# Laravel POS — From Arrays to Eloquent

This project implements IT0049 TFA6 for Arellano, Thomas; Esguerra, Samantha; and Pantas, Aicelle. Professor: Rico Santos. It uses Laravel migrations, seeders, Eloquent models, controllers, and Blade views for customers and users.

## Setup

1. Install PHP 8.2+, Composer, and SQLite.
2. Run `composer install`.
3. Copy `.env.example` to `.env` and run `php artisan key:generate`.
4. Create `database/database.sqlite` and run `php artisan migrate:fresh --seed`.
5. Start with `php artisan serve` and open `/customers` or `/users`.

## Implemented requirements

- `customers`: full_name, email, phone
- `users`: username (unique), full_name
- Five seeded records in each table
- Customer and User Eloquent models
- Controllers query models, never static arrays
- Blade views display retrieved records

## Submission links

- GitHub repository: https://github.com/gilquilong/POS-Application
- Hosted application: **Not published; hosting credentials/service were not supplied.**
