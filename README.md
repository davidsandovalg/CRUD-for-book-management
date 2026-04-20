# CRUD for Book Management

A Laravel-based web application for authenticated book catalog management with search, pagination, and soft-delete behavior.  
**Built in:** 2022

## Tech Stack

| Area | Technology |
| --- | --- |
| Language | PHP 7.2.5+ / 8.0, JavaScript |
| Backend Framework | Laravel 7 |
| Frontend | Blade, Bootstrap 4, Vue 2, Laravel Mix |
| Database | MySQL (configured via `.env`) |
| Dev / Build Tools | Composer, NPM, Webpack (Laravel Mix), PHPUnit |

## Architecture

The project follows a classic Laravel MVC structure: routes define HTTP entry points, controllers encapsulate request handling and validation, Eloquent models map domain entities (`Books`, `User`), and Blade views render server-side UI. The data layer also includes a SQL view (`view_user_created_books`) to simplify book listing queries joined with user names.

## Key Features

- User authentication with registration/login scaffolding.
- Custom validation rules for registration (letters-only names and password uppercase requirement).
- Book CRUD operations (create, read, update, logical delete using `canceled` flag).
- Auto-generated ISBN for new books.
- Search across title, ISBN, publication year, creator name, and creation date.
- Paginated book listing.
- Database seeders for sample users and books.

## Prerequisites

- PHP `^7.2.5` or `^8.0`
- Composer (latest stable recommended)
- MySQL 5.7+ or compatible
- Node.js + NPM (for frontend asset compilation)

## Installation & Setup

1. Clone the repository:
   ```bash
   git clone <your-repository-url>
   cd CRUD-for-book-management
   ```

2. Install backend dependencies:
   ```bash
   composer install
   ```

3. Install frontend dependencies:
   ```bash
   npm install
   ```

4. Configure environment variables:
   ```bash
   cp .env.example .env
   ```
   Update DB credentials in `.env` (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

5. Generate application key (if needed):
   ```bash
   php artisan key:generate
   ```

6. Run migrations and seeders:
   ```bash
   php artisan migrate
   php artisan db:seed --class=DatabaseSeeder
   ```

7. Build frontend assets:
   ```bash
   npm run dev
   ```

## Usage

- Run local development server:
  ```bash
  php artisan serve
  ```

- Run automated tests:
  ```bash
  php artisan test
  ```
  or
  ```bash
  vendor/bin/phpunit
  ```

- Build production assets:
  ```bash
  npm run prod
  ```

## Folder Structure

```text
app/
  Http/Controllers/     # Request handling and business flow
  Rules/                # Custom validation rules
  Books.php             # Book model
config/                 # Framework and service configuration
database/
  migrations/           # Schema + SQL view creation
  seeds/                # Sample data seeders
resources/
  views/                # Blade templates (auth + books UI)
routes/
  web.php               # Web routes for auth and books CRUD
tests/                  # Unit and feature test scaffolding
