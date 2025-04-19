# Laravel + Vue + Vite Template
This is a template for creating Laravel projects with Vue 3 and Vite.

## Installation

1. Clone the repository:
   ```bash
   git clone <template-repo-url> new-project-name
   cd new-project-name

2. Install PHP Dependencies
Install the Laravel backend dependencies using Composer:
composer install

3. Install Node.js Dependencies
Install the frontend dependencies using npm:
npm install

4. Set Up the Environment File
Copy the .env.example file to .env and configure it

5. Generate the Application Key
Generate the Laravel application key:
php artisan key:generate

6. Run Database Migrations (Optional)
If your project uses a database, run the migrations to set up the database schema:
php artisan migrate

7. Run the Development Servers
Start the Laravel backend server:
php artisan serve

8. Start the Vite development server for the frontend:
npm run dev