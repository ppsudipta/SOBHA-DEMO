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

bash
Copy
Edit
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

bash
Copy
Edit
mkdir -p public/uploads
touch public/uploads/.gitkeep
Add Files and Commit

bash
Copy
Edit
git add .
git commit -m "Initial Laravel project commit"
Add Remote Repository

bash
Copy
Edit
git remote add origin https://github.com/yourname/your-repo.git
Push Project to GitHub

bash
Copy
Edit
git branch -M main
git push -u origin main
📥 After Cloning Laravel Project
Clone the Repository

bash
Copy
Edit
git clone https://github.com/yourname/your-repo.git
cd your-repo
Install PHP & Node.js Dependencies

bash
Copy
Edit
composer install
npm install
Copy .env and Generate App Key

bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Edit .env

Update database credentials and other settings inside .env file.

Run Database Migrations (Optional)

bash
Copy
Edit
php artisan migrate
Create Storage Symlink (If Using File Uploads)

bash
Copy
Edit
php artisan storage:link
Compile Frontend Assets

For development:

bash
Copy
Edit
npm run dev
For production:

bash
Copy
Edit
npm run build
Serve the Application

bash
Copy
Edit
php artisan serve
Visit the project at:
http://127.0.0.1:8000

🚀 Production Notes
Set APP_ENV=production in .env.

Use a proper web server like Apache or Nginx.

Run:

bash
Copy
Edit
php artisan config:cache
npm run build
📁 Files and Folders Ignored by Git
/vendor

/node_modules

/storage

/public/uploads

.env

 for testing purpose .env included only
