# Movie Library Project

## Description
This project is a **online store** built with **Laravel 10** that provides a **API**f for show products , flter product by categories, store an order , show all orders to user . It allows admin to perform **CRUD operations** (Create, Read, Update, Delete) on products,  The project follows **repository design patterns** and incorporates **clean code** and **refactoring principles**.

### Key Features:
- **CRUD Operations**: Create, read, update, and delete products in the store.
- **Filtering**: Filter products.
- **Repository Design Pattern**: Implements repositories and services for clean separation of concerns.
- **Form Requests**: Validation is handled by custom form request classes.
- **API Response Service**: Unified responses for API endpoints.
- **Pagination**: Results are paginated for better performance and usability.
- **Resources**: API responses are formatted using Laravel resources for a consistent structure.
- **Seeders**: Populate the database with initial data for testing and development.

### Technologies Used:
- **Laravel 10**
- **PHP**
- **MySQL**
- **XAMPP** (for local development environment)
- **Composer** (PHP dependency manager)
- **Postman Collection**: Contains all API requests for easy testing and interaction with the API.

---

## Installation

### Prerequisites

Ensure you have the following installed on your machine:
- **XAMPP**: For running MySQL and Apache servers locally.
- **Composer**: For PHP dependency management.
- **PHP**: Required for running Laravel.
- **MySQL**: Database for the project
- **Postman**: Required for testing the requestes.

### Steps to Run the Project

1. Clone the Repository  
   ```bash
   git clone 
2. Navigate to the Project Directory
   ```bash
   cd ecommerce
3. Install Dependencies
   ```bash
   composer install
4. Create Environment File
   ```bash
   cp .env.example .env
   Update the .env file with your database configuration (MySQL credentials, database name, etc.).
5. Generate Application Key
    ```bash
    php artisan key:generate
6. Run Migrations
    ```bash
    php artisan migrate
7. Seed the Database
    ```bash
    php artisan db:seed
8. Run the Application
    ```bash
    php artisan serve
9. Interact with the API and test the various endpoints via Postman collection 
    Get the collection from here: (https://api.postman.com/collections/30331978-bda7f060-bb72-4f7f-9b49-e42dc79aeb91?access_key=PMAT-01JB9T8KNEMQWNTSQXJWDX2GGX)
