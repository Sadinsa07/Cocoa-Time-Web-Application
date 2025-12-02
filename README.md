# 🍫 Cocoa Time Web Application

<div align="center">

![Cocoa Time](https://img.shields.io/badge/Cocoa%20Time-Chocolate%20Shop-8B4513?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

**A delightful e-commerce web application for chocolate lovers!**

[Features](#-features) • [Installation](#-installation) • [Usage](#-usage) • [Database](#-database-setup) • [Technologies](#-technologies-used)

</div>

---

## 📋 Table of Contents

- [Overview](#-overview)
- [Features](#-features)
- [Technologies Used](#-technologies-used)
- [System Requirements](#-system-requirements)
- [Installation](#-installation)
- [Database Setup](#-database-setup)
- [Project Structure](#-project-structure)
- [Usage Guide](#-usage-guide)
- [Security Considerations](#-security-considerations)
- [Future Enhancements](#-future-enhancements)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## 🌟 Overview

**Cocoa Time** is a full-featured e-commerce web application designed for chocolate enthusiasts. Built with PHP, MySQL, HTML, CSS, and JavaScript, this platform allows users to browse through an exquisite collection of premium chocolates, add items to their cart, and place orders seamlessly.

The application provides a smooth shopping experience with user authentication, product browsing, shopping cart functionality, and order management capabilities.

---

## ✨ Features

### 🔐 User Authentication
- **User Registration**: New users can create accounts with username, email, and password
- **Secure Login**: Session-based authentication system
- **Password Protection**: User credentials stored in database
- **Session Management**: Maintains user login state across pages
- **Logout Functionality**: Secure session termination

### 🛍️ Shopping Experience
- **Product Catalog**: Browse chocolate bars and chocolate drinks
- **Product Details**: View product images, names, and prices
- **Add to Cart**: Select quantity and add items to shopping cart
- **Cart Management**: View and manage cart items
- **Buy Now**: Quick purchase option for immediate checkout
- **Order History**: Track previous orders (My Order section)

### 🎨 User Interface
- **Responsive Design**: Modern and intuitive interface
- **Navigation Bar**: Easy access to all sections
- **Product Grid**: Clean layout for product display
- **Modal Windows**: Interactive popups for cart actions
- **Font Awesome Icons**: Enhanced visual experience
- **Dropdown Menus**: Organized navigation for product categories

### 📦 Product Categories
- **Chocolate Bars**:
  - Dark Chocolate (Rs. 1,200)
  - White Chocolate (Rs. 2,000)
  - Milk Chocolate (Rs. 1,000)
  - Cashew Nut Chocolate (Rs. 2,200)
  - Caramel Chocolate (Rs. 2,100)
  - Hazelnut Chocolate (Rs. 2,500)
- **Chocolate Drinks** (expandable category)

### 🔄 Dynamic Features
- Real-time cart total calculation
- Session-based user tracking
- AJAX-powered cart updates
- Database-driven product management

---

## 🛠️ Technologies Used

### Frontend
- **HTML5**: Structure and semantic markup
- **CSS3**: Styling and responsive design
- **JavaScript**: Client-side interactivity and validation
- **Font Awesome 6.0**: Icon library

### Backend
- **PHP**: Server-side scripting and business logic
- **MySQL**: Database management system
- **MySQLi**: PHP extension for database connectivity

### Development Environment
- **XAMPP/WAMP/LAMP**: Local server environment
- **Apache**: Web server
- **phpMyAdmin**: Database administration tool

---

## 💻 System Requirements

### Minimum Requirements
- **Operating System**: Windows 7/8/10/11, macOS 10.12+, or Linux
- **Web Server**: Apache 2.4+
- **PHP**: Version 7.4 or higher
- **MySQL**: Version 5.7 or higher
- **RAM**: 2GB minimum (4GB recommended)
- **Storage**: 500MB free space
- **Browser**: Modern web browser (Chrome, Firefox, Safari, Edge)

### Software Dependencies
- XAMPP/WAMP/LAMP/MAMP stack
- Text editor or IDE (VS Code, Sublime Text, PHPStorm)
- phpMyAdmin (usually included with server stack)

---

## 📥 Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/yourusername/Cocoa-Time-Web-Application.git
```

Or download and extract the ZIP file to your desired location.

### Step 2: Install Local Server

Download and install one of the following:
- **XAMPP**: [https://www.apachefriends.org/](https://www.apachefriends.org/)
- **WAMP**: [https://www.wampserver.com/](https://www.wampserver.com/)
- **MAMP** (for macOS): [https://www.mamp.info/](https://www.mamp.info/)

### Step 3: Move Project Files

1. Navigate to your server's web root directory:
   - **XAMPP**: `C:\xampp\htdocs\` (Windows) or `/opt/lampp/htdocs/` (Linux)
   - **WAMP**: `C:\wamp64\www\`
   - **MAMP**: `/Applications/MAMP/htdocs/`

2. Copy the project folder into the web root:
   ```
   htdocs/
   └── Cocoa-Time-Web-Application/
   ```

### Step 4: Start the Server

1. Open XAMPP/WAMP Control Panel
2. Start **Apache** module
3. Start **MySQL** module
4. Verify both services are running (green indicators)

---

## 🗄️ Database Setup

### Method 1: Using phpMyAdmin (Recommended)

1. Open your web browser and navigate to:
   ```
   http://localhost/phpmyadmin
   ```

2. **Create Database**:
   - Click on "New" in the left sidebar
   - Database name: `cocoatime`
   - Collation: `utf8_general_ci`
   - Click "Create"

3. **Create Tables**:
   - Select the `cocoatime` database
   - Click on "SQL" tab
   - Copy and paste the following SQL commands:

   ```sql
   -- Create users table
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       uname VARCHAR(50) NOT NULL,
       email VARCHAR(100) UNIQUE NOT NULL,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   -- Create cart table
   CREATE TABLE cart (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(255) NOT NULL,
       product_name VARCHAR(255) NOT NULL,
       color VARCHAR(50) NOT NULL,
       size VARCHAR(50) NOT NULL,
       quantity INT NOT NULL,
       total_price DECIMAL(10, 2) NOT NULL,
       date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. Click "Go" to execute the SQL commands

### Method 2: Using SQL Commands File

1. Import the provided `sqlcommands.txt` file:
   - Open phpMyAdmin
   - Select `cocoatime` database
   - Go to "Import" tab
   - Choose the `sqlcommands.txt` file
   - Click "Go"

### Database Configuration

Verify the database connection settings in the PHP files:

**File**: `Login/conn.php`, `Signup/signup.php`, `chocolates/addto-cart.php`

```php
$host = "localhost";
$username = "root";
$password = "";  // Default is empty for XAMPP/WAMP
$dbname = "cocoatime";
```

> **Note**: If you have a different MySQL root password, update it in all PHP connection files.

---

## 📁 Project Structure

```
Cocoa-Time-Web-Application/
│
├── 📄 sqlcommands.txt              # Database schema
├── 📄 README.md                    # Project documentation
│
├── 📁 about/                       # About Us section
│   ├── about-us.html              # About page
│   └── style.css                  # About page styles
│
├── 📁 chocodrinks/                 # Chocolate drinks section
│   ├── chocodrinks.html           # Drinks catalog page
│   └── style.css                  # Drinks page styles
│
├── 📁 chocolates/                  # Main chocolate products
│   ├── chocos.html                # Chocolate bars catalog
│   ├── cart.html                  # Shopping cart page
│   ├── addto-cart.php             # Cart functionality backend
│   ├── cart_data.php              # Cart data retrieval
│   └── style.css                  # Product pages styles
│
├── 📁 Home/                        # Home/Landing page
│   ├── home.html                  # Main homepage
│   ├── logout.php                 # Logout functionality
│   └── style.css                  # Homepage styles
│
├── 📁 Login/                       # Authentication - Login
│   ├── login.html                 # Login form
│   ├── login.php                  # Login processing
│   ├── conn.php                   # Database connection
│   └── styles.css                 # Login page styles
│
├── 📁 Signup/                      # Authentication - Registration
│   ├── singup.html                # Signup form
│   ├── signup.php                 # Registration processing
│   └── style.css                  # Signup page styles
│
└── 📁 img/                         # Images and assets
    ├── module_table_bottom.png
    ├── module_table_top.png
    └── [product images]           # Product photos
```

---

## 📖 Usage Guide

### Initial Setup

1. **Start the application**:
   ```
   http://localhost/Cocoa-Time-Web-Application/
   ```

### User Registration

1. Navigate to the signup page:
   ```
   http://localhost/Cocoa-Time-Web-Application/Signup/singup.html
   ```

2. Fill in the registration form:
   - Username (required)
   - Email (required, must be unique)
   - Password (required)
   - Confirm Password (required)

3. Click "Sign Up"
4. Upon successful registration, you'll be redirected to the login page

### User Login

1. Navigate to the login page:
   ```
   http://localhost/Cocoa-Time-Web-Application/Login/login.html
   ```

2. Enter your credentials:
   - Username
   - Password

3. Click "Login"
4. Upon successful login, you'll be redirected to the home page

### Browsing Products

1. **Access Shop**:
   - Click "Shop Now" in the navigation bar
   - Select "Chocolate Bar" or "Chocolate Drinks"

2. **View Products**:
   - Browse through the product grid
   - View product images, names, and prices

### Shopping Process

#### Adding to Cart

1. Click "Add to Cart" on any product
2. A modal window will appear
3. Select desired quantity
4. View the total price calculation
5. Click "Add to Cart" to confirm
6. Item is added to your cart with session tracking

#### Direct Purchase

1. Click "Buy Now" on any product
2. Enter required details in the modal
3. Select quantity
4. Click "Order Now"
5. Receive confirmation message

#### Managing Cart

1. Click "My Cart" in the navigation bar
2. View all items in your cart
3. Review quantities and total prices
4. Proceed to checkout

### Viewing Orders

1. Click "My Order" in the navigation bar
2. View your order history
3. Track order details and status

### Logging Out

1. Click "Log Out" button in the navigation bar
2. Session will be terminated
3. You'll be redirected to the login page

---

## 🔒 Security Considerations

### Current Security Status

> ⚠️ **Important**: This application is designed for educational purposes. Before deploying to production, implement the following security enhancements:

### Critical Security Issues to Address

1. **Password Security**:
   - ❌ Passwords are currently stored in plain text
   - ✅ **Recommended**: Implement password hashing using `password_hash()` and `password_verify()`
   
   ```php
   // Registration
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   
   // Login verification
   if (password_verify($entered_password, $stored_hash)) {
       // Login successful
   }
   ```

2. **SQL Injection Prevention**:
   - ⚠️ Some queries use direct string concatenation
   - ✅ **Recommended**: Use prepared statements consistently
   
   ```php
   $stmt = $conn->prepare("SELECT * FROM users WHERE uname = ?");
   $stmt->bind_param("s", $username);
   $stmt->execute();
   ```

3. **Session Security**:
   - ✅ Add session regeneration on login
   - ✅ Implement CSRF token protection
   - ✅ Set secure session cookie parameters

4. **Input Validation**:
   - ✅ Validate and sanitize all user inputs
   - ✅ Implement client-side and server-side validation
   - ✅ Use HTML special character encoding

5. **HTTPS**:
   - ✅ Use SSL/TLS certificates in production
   - ✅ Force HTTPS connections

### Recommended Security Enhancements

```php
// Secure session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);

// Input sanitization
$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');

// CSRF token implementation
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
```

---

## 🚀 Future Enhancements

### Planned Features

- [ ] **Payment Integration**: Integrate payment gateways (PayPal, Stripe)
- [ ] **Order Tracking**: Real-time order status updates
- [ ] **User Profiles**: Extended user profile management
- [ ] **Product Reviews**: Customer rating and review system
- [ ] **Wishlist**: Save favorite products
- [ ] **Advanced Search**: Filter and search functionality
- [ ] **Email Notifications**: Order confirmations and updates
- [ ] **Admin Panel**: Product and order management dashboard
- [ ] **Inventory Management**: Stock tracking and alerts
- [ ] **Discount Codes**: Promotional code system
- [ ] **Responsive Mobile Design**: Enhanced mobile experience
- [ ] **Multi-language Support**: Internationalization
- [ ] **Social Media Integration**: Share and login via social platforms
- [ ] **Analytics Dashboard**: Sales and user behavior insights

### Technical Improvements

- [ ] Implement MVC architecture
- [ ] Add unit and integration tests
- [ ] Optimize database queries
- [ ] Implement caching mechanisms
- [ ] Add API endpoints (RESTful API)
- [ ] Containerize with Docker
- [ ] Implement CI/CD pipeline
- [ ] Add logging and monitoring

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

### How to Contribute

1. **Fork the Repository**
   ```bash
   git clone https://github.com/yourusername/Cocoa-Time-Web-Application.git
   ```

2. **Create a Feature Branch**
   ```bash
   git checkout -b feature/YourFeatureName
   ```

3. **Make Your Changes**
   - Write clean, documented code
   - Follow existing code style
   - Test your changes thoroughly

4. **Commit Your Changes**
   ```bash
   git commit -m "Add: Your feature description"
   ```

5. **Push to Your Branch**
   ```bash
   git push origin feature/YourFeatureName
   ```

6. **Open a Pull Request**
   - Provide a clear description of changes
   - Reference any related issues
   - Wait for review and feedback

### Contribution Guidelines

- Follow PHP PSR coding standards
- Write meaningful commit messages
- Update documentation for new features
- Add comments to complex logic
- Test across different browsers
- Ensure backward compatibility

### Bug Reports

Found a bug? Please open an issue with:
- Clear description of the problem
- Steps to reproduce
- Expected vs actual behavior
- Screenshots (if applicable)
- Environment details (OS, browser, PHP version)

---

## 📜 License

This project is licensed under the **MIT License**.

```
MIT License

Copyright (c) 2025 Cocoa Time

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

## 📞 Contact

### Project Information

- **Project Name**: Cocoa Time Web Application
- **Version**: 1.0.0
- **Status**: Active Development

### Get in Touch

- 📧 **Email**: sadinsawarangani@gmail.com
- 💬 **Issues**: [GitHub Issues](https://github.com/sadinsa07/Cocoa-Time-Web-Application/issues)

### Support

For questions, suggestions, or support:
1. Check existing [Issues](https://github.com/sadinsa07/Cocoa-Time-Web-Application/issues)
2. Create a new issue if your question hasn't been answered
3. Contact via email for urgent matters

---

## 🙏 Acknowledgments

- **Font Awesome** for the icon library
- **PHP Community** for extensive documentation
- **MySQL** for reliable database management
- **Stack Overflow** community for problem-solving support
- All contributors and testers

---

## 📊 Project Statistics

![GitHub repo size](https://img.shields.io/github/repo-size/sadinsa07/Cocoa-Time-Web-Application)
![GitHub contributors](https://img.shields.io/github/contributors/sadinsa07/Cocoa-Time-Web-Application)
![GitHub stars](https://img.shields.io/github/stars/sadinsa07/Cocoa-Time-Web-Application?style=social)
![GitHub forks](https://img.shields.io/github/forks/sadinsa07/Cocoa-Time-Web-Application?style=social)

---

<div align="center">

### Made with ❤️ and 🍫

**Enjoy your chocolate shopping experience with Cocoa Time!**

[⬆ Back to Top](#-cocoa-time-web-application)

</div>
