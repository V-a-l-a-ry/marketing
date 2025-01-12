# Getting Started

Welcome to the **Marketing Website for DeKUT Documentation** documentation. This guide will walk you through the steps needed to set up and run the application on your local machine.

- Sidenotes

## Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** (>= 8.2)
- **laravel** (^11)
- **Composer**
- **Node.js** (with npm or yarn)
- **MySQL or SQLite** (for the database)
- **Git** (optional for version control)

## 1. Clone the Repository

If you haven't already, clone the project from the repository:

```bash
git clone https://github.com/V-a-l-a-ry/marketing.git
```
Navigate into the project repository:
```bash
cd marketing 
```

## 2. Install Dependencies
You will need to install both PHP and Node.js dependencies.

### PHP Dependencies
Use Composer to install the necessary PHP packages:
```bash
composer install
```
### Node.js Dependencies
Install the required frontend dependencies using npm or yarn:

```bash
# Using npm
npm install

# Or using yarn
yarn install
```
## 3. Configure the Environment
Duplicate the `.env.example` file to create your `.env file`:

```bash
cp .env.example .env
```
### Environment Variables
Update the following fields in your `.env` file:

- **APP_NAME**: `marketing`
- **DB_CONNECTION**: Set this to `mysql` or `sqlite` depending on your setup.
- **DB_DATABASE**: The name of the database you'll use.
- **DB_USERNAME**: Your database username.
- **DB_PASSWORD**: Your database password.

Example `.env` settings:
```env
APP_NAME=marketing
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=photo_gallery_db
DB_USERNAME=root
DB_PASSWORD=secret
```
### Generate Application Key
Run the following command to generate an application key:

```bash
php artisan key:generate
```
## 4. Set Up the Database
If you're using MySQL, create a database for the application:

```sql
CREATE DATABASE marketing_db;
```
Run the database migrations to set up the tables:

```bash
php artisan migrate
```

## 6. Run the Application
Now, you can start the Laravel development server:

```bash
php artisan serve
```
Your application should now be running at `http://127.0.0.1:8000`.

```bash
npm run dev
```

