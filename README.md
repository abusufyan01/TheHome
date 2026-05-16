<h1 align="center">
  <br>
  🏠 TheHome
  <br>
  Real Estate Management System
  <br>
</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript"/>
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"/>
  <img src="https://img.shields.io/badge/Stripe-635BFF?style=for-the-badge&logo=stripe&logoColor=white" alt="Stripe"/>
  <img src="https://img.shields.io/badge/PayPal-003087?style=for-the-badge&logo=paypal&logoColor=white" alt="PayPal"/>
</p>

<p align="center">
  A comprehensive, full-stack Real Estate Management System (REMS) — the Final Year Project designed to digitize property transactions, agent management, and appointment scheduling in a secure, centralized web platform.
</p>

---

## 📋 Table of Contents

- [Overview](#-overview)
- [Demo Video](#-demo-video)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [User Roles](#-user-roles)
- [Getting Started](#-getting-started)
- [Project Structure](#-project-structure)
- [Contributing](#-contributing)
- [License](#-license)

---

## 🌟 Overview

**TheHome (REMS)** is a web-based Real Estate Management System developed as a Final Year Project. It solves the key problems of traditional real estate operations — manual listings, delayed appointments, and insecure payments — by providing a modern digital platform for property agencies, agents, and buyers.

The system supports the full real estate workflow: from property listing and advanced search to appointment scheduling and secure online payment processing via Stripe and PayPal.

> Built with PHP (Laravel), MySQL, Bootstrap, and JavaScript — fully open-source tools.

---

## 🎬 Demo Video

<p align="center">
  <a href="https://youtu.be/n6AGLZbT4Q0?si=eXKcBrULQBGW-xjH">
    <img src="https://img.youtube.com/vi/n6AGLZbT4Q0/maxresdefault.jpg" 
    width="100%" alt="TheHome - Real Estate Management System Demo"/>
  </a>
  <br><br>
  <a href="https://youtu.be/n6AGLZbT4Q0?si=eXKcBrULQBGW-xjH">
    <img src="https://img.shields.io/badge/▶%20Watch%20Demo-FF0000?style=for-the-badge&logo=youtube&logoColor=white" alt="Watch Demo"/>
  </a>
  <br>
  <i>👆 Click to watch the full project demo on YouTube</i>
</p>

---

## ✨ Features

### 🏘️ Property Management
- Agents can add, edit, and delete property listings
- Each listing includes images, description, price, area, and location
- Properties categorized by type (House, Apartment, Commercial, Plot)
- Admin can approve or reject property listings before they go live

### 🔍 Search & Filter
- Buyers can search properties by location, price range, property type, and availability
- Advanced filtering for a streamlined property discovery experience

### 📅 Appointment Booking
- Buyers can view agent profiles and book appointments for property visits
- Agents receive and manage their scheduled appointments
- Appointment status tracking: Pending / Confirmed / Completed / Cancelled

### 💳 Payment Processing
- Secure online payment integration via **Stripe** and **PayPal**
- Payment history tracking for users
- Transaction reports accessible to admins and property owners

### 🔐 Authentication & Role-Based Access Control
- Secure registration and login for all user types
- Role-based access: Admin, Agent, and Buyer/Customer
- Agent approval workflow — admins review and approve agent accounts before they can list properties

### 🛡️ Admin Dashboard
- Full CRUD operations across all modules
- Manage user accounts, agent approvals, and property listings
- Monitor system activity and generate transaction reports
- Manage employees and system notifications

### 📊 Normalized Database Design
- Optimized MySQL relational schema with proper indexing
- Clean foreign key relationships for data integrity
- Efficient query performance for concurrent users

---

## 🛠 Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend Framework | Laravel (PHP) |
| Frontend | HTML, CSS, Bootstrap, JavaScript |
| Database | MySQL |
| Authentication | Laravel Auth |
| Payment Gateways | Stripe, PayPal |
| Local Development | XAMPP |
| Version Control | Git + GitHub |
| Code Editor | Visual Studio Code |

---

## 👥 User Roles

The system has three main roles, each with distinct permissions:

**Customer (Buyer/Renter)**
- Register and log in
- Search and filter property listings
- View property details and images
- Book appointments with agents
- Make online payments
- View transaction history

**Real Estate Agent**
- Register (subject to admin approval)
- Add, edit, and delete property listings
- Manage appointment requests
- Update property status
- View assigned properties and reports

**Administrator**
- Approve or reject agent registrations
- Manage all user accounts and roles
- Approve or reject property listings
- Monitor system activity
- Generate reports and handle notifications
- Manage employee records

---

## 🚀 Getting Started

### Prerequisites

Make sure you have the following installed:

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & npm
- XAMPP (or any Apache/MySQL stack)
- Laravel CLI

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/abusufyan01/TheHome.git
cd TheHome
```

**2. Install PHP dependencies**

```bash
composer install
```

**3. Install Node dependencies**

```bash
npm install && npm run dev
```

**4. Configure environment**

```bash
cp .env.example .env
php artisan key:generate
```

**5. Set up the database**

Open `.env` and update your database and payment credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=thehome
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

STRIPE_KEY=your_stripe_publishable_key
STRIPE_SECRET=your_stripe_secret_key

PAYPAL_CLIENT_ID=your_paypal_client_id
PAYPAL_SECRET=your_paypal_secret
```

**6. Run migrations and seed data**

```bash
php artisan migrate --seed
```

**7. Start the development server**

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---


## 📁 Project Structure

```
TheHome/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php
│   │   │   ├── AgentController.php
│   │   │   ├── PropertyController.php
│   │   │   ├── AppointmentController.php
│   │   │   ├── PaymentController.php
│   │   │   └── Auth/
│   │   └── Middleware/
│   └── Models/
│       ├── User.php
│       ├── Agent.php
│       ├── Customer.php
│       ├── Property.php
│       ├── Appointment.php
│       ├── PropertyType.php
│       └── Location.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       ├── admin/
│       ├── agent/
│       ├── customer/
│       └── auth/
├── routes/
│   └── web.php
├── public/
├── .env.example
├── .gitignore
├── composer.json
└── README.md
```


---

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m 'Add some feature'`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a Pull Request

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

