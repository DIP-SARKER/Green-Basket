

# 🛒 GreenBasket

**GreenBasket** is a modern **D2C (Direct-to-Consumer)** e-commerce platform built using **Laravel (PHP)** along with **HTML, CSS, and JavaScript**. It bridges the gap between **producers** and **consumers**, allowing sellers to advertise and sell their products directly—eliminating middlemen, increasing transparency, and ensuring fair pricing.

---

## 🌿 Key Features

* **Direct-to-Consumer Marketplace**
  Producers can showcase and manage products via their own **admin dashboards**.

* **Buyer-Friendly Interface**
  Customers can seamlessly browse products, view detailed descriptions, and place orders directly from producers.

* **Seller Admin Panel**
  A secure and responsive backend dashboard for producers to manage their listings, profile, and orders.

* **Built with Laravel**
  Using Laravel's MVC architecture for robust, scalable, and maintainable backend development.

* **Mobile-Responsive Design**
  Crafted using modern HTML5/CSS3 and vanilla JavaScript for a smooth user experience across devices.

---

## 🛠️ Technologies Used

| Frontend             | Backend                  |
| -------------------- | ------------------------ |
| HTML5, CSS3          | PHP (Laravel)            |
| JavaScript (Vanilla) | Laravel Blade Templating |
| Bootstrap (optional) | MySQL                    |

---

## 🚀 Getting Started

Follow these steps to run the project locally:

### 1. **Clone the Repository**

```bash
git clone https://github.com/your-username/greenbasket.git
cd greenbasket
```

### 2. **Install Dependencies**

Make sure you have **Composer** installed, then run:

```bash
composer install
```

### 3. **Create Environment File**

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the following variables in `.env`:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. **Generate App Key & Migrate Database**

```bash
php artisan key:generate
php artisan migrate
```

> You can also seed initial data using `php artisan db:seed` if needed.

### 5. **Run the Server**

```bash
php artisan serve
```

Visit `http://localhost:8000` to view the application in your browser.

---

## 📁 Project Structure (Simplified)

```
greenbasket/
├── app/                  # Laravel application core
├── resources/
│   ├── views/            # Blade templates for frontend
│   └── css/js/           # Assets
├── routes/
│   └── web.php           # Route definitions
├── public/               # Publicly accessible files (index.php, assets)
├── database/             # Migrations and seeders
└── .env                  # Environment variables
```

---

## 👥 User Roles

* **Buyers** – Browse and order products directly from producers.
* **Producers (Sellers)** – Access a dedicated panel to manage their products and sales.
* **Admins (Optional)** – Platform managers with broader access and control (optional feature).

---

## 🔮 Planned Enhancements

* Product reviews and rating system
* Real-time notifications for orders and messages
* Integrated payment gateway (Stripe/PayPal)
* Order tracking and delivery updates
* Analytics dashboard for sellers

---

## 🤝 Contributing

Pull requests are welcome! If you'd like to contribute:

1. Fork the repo
2. Create your feature branch (`git checkout -b feature-name`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature-name`)
5. Open a Pull Request

---

## 📬 Contact

For feedback or collaboration, feel free to reach out to any of the team members:

* 📧 [sarker15-5273@diu.edu.bd](mailto:sarker15-5273@diu.edu.bd)
* 📧 [sarker15-5274@diu.edu.bd](mailto:sarker15-5274@diu.edu.bd)
* 📧 [rashid15-5273@diu.edu.bd](mailto:rashid15-5273@diu.edu.bd)
* 📧 [rahman15-4766@diu.edu.bd](mailto:rahman15-4766@diu.edu.bd)
* 📧 [khan15-5728@diu.edu.bd](mailto:khan15-5728@diu.edu.bd)
* 📧 [prome15-5902@diu.edu.bd](mailto:prome15-5902@diu.edu.bd)


---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---
