# Laravel Project

A Laravel application.

---

## 🚀 Complete Laravel Project Setup Guide

### 📤 Upload Laravel Project to GitHub

1. **Initialize Git**

```bash
git init
Create/Edit .gitignore

Ensure your project has a .gitignore file with the following content:


/vendor
/node_modules
/public/storage
/public/uploads/*
!/public/uploads/.gitkeep
/storage/*.key
/storage/app/public
/storage/framework
/storage/logs
.env
.phpunit.result.cache
Homestead.yaml
Homestead.json
npm-debug.log
yarn-error.log
To preserve the uploads folder structure:


mkdir -p public/uploads
touch public/uploads/.gitkeep
Add Files and Commit


git add .
git commit -m "Initial Laravel project commit"
Add Remote Repository


git remote add origin https://github.com/yourname/your-repo.git
Push Project to GitHub


git branch -M main
git push -u origin main
📥 After Cloning Laravel Project
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



 for testing purpose .env included only
