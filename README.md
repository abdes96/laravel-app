# Patient Counseling Web App

A Laravel-based platform for physical therapists to collect and analyze patient feedback after sessions.

![App Screenshot](screenshots/dashboard.png) <!-- Add real screenshot path -->

## Features
- ✅ Create public/private questionnaires with single-use links
- ✅ Real-time statistics with interactive charts (Chart.js)
- ✅ Role-based access (Therapists/Patients)
- ✅ Secure data handling (Laravel Sanctum)

## Technologies
- **Backend**: Laravel 9+, PHP 8.1
- **Frontend**: PHP , Blade,
- **Database**: MySQL/PostgreSQL

## Installation

### Prerequisites
- PHP 8.1+
- Composer 2.0+
- MySQL 5.7+

```bash
# Clone repository
git clone https://github.com/abdes96/Patient-Counseling.git
cd Patient-Counseling

# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Migrate database
php artisan migrate --seed
