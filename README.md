## Setup Instructions

Follow these steps to set up the project on your local machine:

1. **Change Database Configuration**  
   Open the `.env` file and update the database configuration to match your local database setup:

   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password

2. **Run Migrations**
Create the database tables by running the migrations:
php artisan migrate

3. **Seed the Database**
-Populate the database with initial data for users:
php artisan db:seed

4. **Create Fake Client Data**
-Generate fake data for clients by running the specific seeder:
php artisan db:seed clientSeeder

5. **Start the Server**
-Start the Laravel development server:
php artisan serve

Now you can access the application at http://localhost:8000.

Admin account :
email: admin@example.com
password: 12345678

User account :
email: user@example.com
password: 12345678