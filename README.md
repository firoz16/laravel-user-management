# Laravel User Management System

A simple user management system built with Laravel 10, implementing user creation, updating, and caching for performance optimization.

## Features
- User creation and update functionality
- API-based structure
- Data validation
- Caching for optimized database queries
- Modular code structure

## Installation & Setup

### 1. Install Dependencies
```sh
composer install
```

### 2. Configure Environment
Copy the `.env.example` file and set up the database:
```sh
cp .env.example .env
```
Update the `.env` file with database credentials:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_management
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Generate App Key
```sh
php artisan key:generate
```

### 4. Run Migrations
```sh
php artisan migrate
```

### 5. Start the Server
```sh
php artisan serve
```
API available at: `http://127.0.0.1:8000/api`

## API Endpoints

### Create User
**Endpoint:** `POST /api/user`
```json
{
    "name": "Test user",
    "email": "testuser@gmail.com",
    "password": "password123"
}
```

### Update User
**Endpoint:** `PUT /api/user/{id}`
```json
{
    "name": "Test user again",
    "email": "testusergain@gmail.com"
}
```
