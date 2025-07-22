# Laravel Project

A Laravel application.

---

📥 Cloning Laravel Project
Clone the Repository


git clone https://github.com/yourname/your-repo.git
cd your-repo
Install PHP & Node.js Dependencies


composer install
npm install
Copy .env and Generate App Key


cp .env.example .env
php artisan key:generate
Edit .env

Update database credentials and other settings inside .env file.

Run Database Migrations (Optional)


php artisan migrate
Create Storage Symlink (If Using File Uploads)


php artisan storage:link
Compile Frontend Assets

For development:


npm run dev
For production:


npm run build
Serve the Application


php artisan serve

Visit the project at:
http://127.0.0.1:8000

🚀 Production Notes
Set APP_ENV=production in .env.

Use a proper web server like Apache or Nginx.

Run:


php artisan config:cache
npm run build



