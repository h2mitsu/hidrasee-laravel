# HIDRASEE - Water Depot Locator & Delivery App

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

HIDRASEE is a full-stack web application built with Laravel that connects users with their nearest water depots. It features a location-based search system and an integrated ordering platform with multiple delivery options to ensure customers can easily meet their hydration needs.

---

### ## 📸 Screenshots

![HIDRASEE Main Page]([home.png])
![HIDRASEE Depot View]([screenshot.png])

---

### ## ✨ Key Features

The platform is designed with features for both customers and depot owners:

#### For Customers:
* 🗺️ **Find Nearest Depot:** Enter a location to see a list of the nearest and highest-rated water depots.
* 🛒 **Direct Ordering:** Browse products from registered depots and place orders directly through the app.
* 🚚 **Flexible Delivery:** Choose your preferred fulfillment method:
    * **Depot Delivery:** Delivered by the depot's own service.
    * **HIDRASEE Delivery:** Delivered by a dedicated HIDRASEE driver.
    * **Self Pick-up:** Order ahead and pick it up yourself.

#### For Depot Owners:
* 🏪 **Manage Your Storefront:** Register your depot and create an account to sell products.
* 📦 **Product Management:** Easily list and manage the products you have for sale.
* 📋 **Order Fulfillment:** View and manage incoming customer orders.

---

### ## 🛠️ Technology Stack

* **Backend:** PHP, Laravel Framework
* **Frontend:** HTML, CSS, JavaScript, Bootstrap
* **Database:** [e.g., MySQL, PostgreSQL]
* **Architecture:** MVC (Model-View-Controller)

---

### ## 🚀 Installation & Setup

To run this project locally, follow these steps:

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/your-username/hidrasee-laravel.git](https://github.com/your-username/hidrasee-laravel.git)
    cd hidrasee-laravel
    ```
2.  **Install dependencies:**
    ```bash
    composer install
    npm install
    ```
3.  **Setup your environment file:**
    ```bash
    cp .env.example .env
    ```
    *Then, open the `.env` file and configure your database credentials.*

4.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```
5.  **Run database migrations and seeders:**
    ```bash
    php artisan migrate --seed
    ```
6.  **Build frontend assets:**
    ```bash
    npm run dev
    ```
7.  **Serve the application:**
    ```bash
    php artisan serve
    ```
    The application will be running at `http://127.0.0.1:8000`.
