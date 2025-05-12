# Product Management System

A Symfony-based web application for managing product inventory with user authentication.

## Overview

This application allows users to register, log in, and manage a list of products. Users can add new products with details including name, description, and price. The application features a responsive UI with Bootstrap and uses Twig templates for rendering views.

## Showcase

Here are some screenshots of the application:

### Landing Page
![Landing Page](/screenshots/Landing-page.png)

### User Authentication
![Signup Page](/screenshots/signup.png)
![Login Page](/screenshots/login.png)

### Product Management
![Product Dashboard](/screenshots/product-dashboard.png)
![Add New Product](/screenshots/add-new-product.png)
![Product List](/screenshots/product-list.png)

## Features

- **User Authentication**
  - Registration with email validation
  - Secure login/logout functionality
  - Role-based access control (ROLE_USER)

- **Product Management**
  - Add new products with name, description, and price
  - View a list of all products
  - Display product details 
  - Format currency values using Twig's IntlExtension

- **Dashboard**
  - User-friendly interface with product statistics
  - Accordion-style product display

## Technologies Used

- **Backend**:
  - PHP 8.x
  - Symfony 7.x
  - Doctrine ORM for database operations

- **Frontend**:
  - Twig templating engine
  - Bootstrap for responsive design
  - IntlExtension for currency formatting

- **Security**:
  - Symfony Security Bundle
  - Password hashing
  - CSRF protection

## Requirements

- PHP 8.0 or higher
- Composer
- Database (MySQL/PostgreSQL)
- Web server (Apache/Nginx)

## Installation

1. **Clone the repository**:
   ```
   git clone https://github.com/General-Sandwalker/examen-jabnouni-noureddine.git
   cd examen-jabnouni-noureddine
   ```

2. **Install dependencies**:
   ```
   composer install
   ```

3. **Configure the database**:
   - Update the `.env` file with your database connection info:
     ```
     DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=15&charset=utf8"
     ```

4. **Create the database and run migrations**:
   ```
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

5. **Start the Symfony development server**:
   ```
   symfony server:start
   ```

6. **Access the application**:
   - Open your browser and navigate to `http://localhost:8000`

## Project Structure

- `src/Controller/` - Contains application controllers
- `src/Entity/` - Database entity classes
- `src/Form/` - Form definitions
- `src/Repository/` - Repository classes for database queries
- `templates/` - Twig templates for rendering views
- `migrations/` - Database migration files
- `public/` - Publicly accessible files

## Key Entities

### User
- Properties: id, username, email, password, roles
- Implements Symfony's UserInterface
- Email address must be unique

### Product
- Properties: id, name, description, price, createdAt
- Pricing displayed with currency formatting

## Routes

- `/` - Landing page
- `/register` - User registration
- `/login` - User login
- `/dashboard` - User dashboard
- `/product/add` - Add new product
- `/product/list` - View all products

## Additional Setup

To enable currency formatting, make sure the IntlExtension is installed:

```
composer require twig/intl-extra
```

## License

[Specify your license information here]

## Author

Noureddine Jabnouni