# ZedCars 🚗

A car marketplace that allows **buyers** to easily browse available vehicles while **sellers** can list their cars for sale.

---

## Features
- 🔎 Browse cars by make, model, year, and price  
- 📸 Sellers can create listings with photos and details  
- ❤️ Buyers can save favorite cars  
- 🔒 Secure authentication for buyers and sellers  
- 📱 Mobile-friendly design  

---

## Tech Stack
- **Backend:** Laravel  
- **Frontend:** Blade / Vue.js (depending on your setup)  
- **Database:** MySQL / PostgreSQL  
- **Authentication:** Laravel Breeze  

---

## Getting Started

### Clone the repo
```bash
git clone https://github.com/morganmutila/zedcars.git
cd zedcars
```


### Install dependencies
```bash
composer install
npm install && npm run dev
```

###  Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

###  Start the development server
```bash
php artisan migrate
```


