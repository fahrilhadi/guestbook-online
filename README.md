# Guestbook Online App

A **simple online Guestbook application** built with **Laravel 12** and **TailwindCSS**, 
allowing visitors to leave messages easily.

## Screenshots

**Index Page (Empty State — No Messages Yet)**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/8adba963-2dd4-4e6c-b3c3-1e56a41e649a" /><br>

**Index Page (With Messages)**

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/1906831f-c2cf-458f-9ebc-bbfb64113433" /><br>

**Create Message**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/67370651-9c21-4769-91f7-b22311f825cb" /><br>

## Tech Stack

- **Backend:** Laravel 12  
- **Frontend:** Blade Templates + TailwindCSS  
- **Database:** MySQL 
- **Version Control:** GitHub  

## Quick Start

```bash
# Clone repository
git clone https://github.com/fahrilhadi/guestbook-online.git
cd guestbook-online

# Install dependencies
composer install
npm install
npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Serve application
php artisan serve
