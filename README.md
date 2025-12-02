A Cocoa Time - Web Application

A simple, educational web application for a chocolate & cocoa shop built with HTML, CSS, PHP and MySQL. This repository contains the front-end pages, PHP scripts for authentication and shopping cart functionality, and SQL commands for creating the database schema.

## Quick Summary 🚀

- Language stack: HTML, CSS, PHP (mysqli), MySQL 🍫
- Primary folders: `Home/`, `Login/`, `Signup/`, `chocolates/`, `chocodrinks/`, `about/`, `img/` 📁
- Database schema and seed data: `sqlcommands.txt`
- Intended for: local development, demos, learning PHP & basic e-commerce flow ☕

- Customer-facing pages for browsing drinks and chocolates. 🍫
- Basic authentication (login / signup) using PHP. 🔐
- Shopping cart support with add/remove features. 🛒
- PHP scripts for cart persistence and simple server-side logic. ⚙️

## Table of Contents

1. Prerequisites
2. Quick start (XAMPP)
3. Database setup
4. Configuration
5. File structure & important files
6. Development notes & recommended improvements
7. Security checklist
8. Troubleshooting
9. Contributing, license, contact

- Frontend: HTML, CSS
- Backend: PHP (mysqli)
- Database: MySQL (import `sqlcommands.txt`)
- Runs on: Apache / XAMPP / WAMP or any PHP-enabled web server

## 1) Prerequisites ✅

- PHP 7.0+ with `mysqli` enabled
- MySQL or MariaDB
- Local web server such as XAMPP/WAMP (recommended for Windows)
- A browser to open the HTML pages

- PHP 7.0 or newer (with `mysqli` extension enabled)
- MySQL or MariaDB
- A local web server such as XAMPP, WAMP, or LAMP

## 2) Quick start (XAMPP on Windows) ⚡

1. Copy the project folder into XAMPP's `htdocs` (example):

```powershell
Copy-Item -Path "C:\path\to\Cocoa-Time-Web-Application-main" -Destination "C:\xampp\htdocs\" -Recurse
```

2. Start Apache and MySQL from the XAMPP Control Panel.

3. Import the database schema and seed data:

```powershell
# Adjust the DB name, or create it first using phpMyAdmin or CLI
mysql -u root -p your_database_name < "C:\xampp\htdocs\Cocoa-Time-Web-Application-main\sqlcommands.txt"
```

4. Update database credentials in `Login/conn.php`.

5. Open the app in your browser:

```
http://localhost/Cocoa-Time-Web-Application-main/Home/home.html
```

## 3) Database setup 🗄️

- The project includes `sqlcommands.txt`. Import it into your MySQL database to create tables and seed basic data.
- Typical tables expected in this app (example): `users`, `products`, `cart_items`, `orders`.

Example minimal `users` table (if `sqlcommands.txt` is not present or you want a quick start):

```sql
CREATE TABLE users (
   id INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(100) NOT NULL UNIQUE,
   email VARCHAR(255) NOT NULL UNIQUE,
   password_hash VARCHAR(255) NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255) NOT NULL,
   description TEXT,
   price DECIMAL(10,2) NOT NULL,
   image_path VARCHAR(255)
);
```

Adjust or extend these tables to match the actual schema in `sqlcommands.txt`.

## 4) Configuration ⚙️

- Edit `Login/conn.php` and set your DB connection details:

```php
<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'your_database_name';
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) { die('Connection failed: '.$conn->connect_error); }
?>
```

- Ensure the `action` attributes in the HTML forms point to the correct PHP handlers (e.g., `Signup/signup.php`, `Login/login.php`).

## 5) File structure & important files 📁

- `sqlcommands.txt` — SQL statements to create schema/seed data.
- `Home/home.html` — Main landing page.
- `Login/` — `login.html`, `login.php`, `conn.php` (DB connection).
- `Signup/` — `signup.html`, `signup.php` (user registration).
- `chocolates/` — product listing and cart files: `chocos.html`, `addto-cart.php`, `cart_data.php`, `cart.html`.
- `chocodrinks/` — drinks page.
- `about/` — `about-us.html` and styles.
- `img/` — images used across the site.

Tip: filenames vary (`style.css` vs `styles.css`). If styles don't load, verify the link paths in the HTML files.

## 6) Development notes & recommended improvements 🛠️

- Replace any inline SQL string concatenation with prepared statements (`$stmt = $conn->prepare(...)`) to prevent SQL injection.
- Use `password_hash()` and `password_verify()` for password storage and verification.
- Centralize configuration into a single file (e.g., `config.php`) and include it where needed.
- Consider reorganizing static assets (`css/`, `js/`, `images/`) for maintainability.

## 7) Security checklist (must-do before any public deployment) 🔒

- Use prepared statements / parameterized queries for all DB operations.
- Hash passwords with `password_hash()`; never store plain text passwords.
- Enforce server-side validation and input sanitization for all user input.
- Use HTTPS and set secure cookie flags for session cookies (`session_set_cookie_params`).
- Regenerate session ID after successful login (`session_regenerate_id(true)`).
- Limit error output in production; log detailed errors server-side.

## 8) Troubleshooting 🐞

- Database connection errors: verify credentials in `Login/conn.php` and ensure MySQL is running.
- Blank pages / parse errors: enable `display_errors` temporarily in `php.ini` or check Apache error logs.
- Styles not applied: open the browser DevTools and verify the path to CSS files and network 404s.
- 404 on assets: make sure file/folder names and relative paths match exactly (Windows filesystem can be case-insensitive, but hosting may not be).

## 9) Contributing, license, contact ✉️

- If you want me to make changes (fix filenames, migrate raw SQL to prepared statements, add password hashing), reply with what you'd like changed and I'll patch the files.
- Add a `LICENSE` file if you want a specific open-source license (MIT is a common choice for small projects).

## Next steps I can do for you ➕

- Replace raw SQL in `.php` files with prepared statements and add `password_hash()` usage.
- Rename files and adjust references where needed (I already added `Signup/signup.html` and left a redirect in the old `singup.html`).
- Add a `README-DEV.md` with a developer checklist and a small test harness to simulate registration/login.

---

If you want, I can now: **(1)** harden the PHP authentication (hash & verify passwords), **(2)** convert DB queries to prepared statements, or **(3)** add a `LICENSE` file — tell me which and I'll continue.

   ```powershell
   # copy the folder to Apache htdocs (example path)
   Copy-Item -Path "C:\path\to\Cocoa-Time-Web-Application-main" -Destination "C:\xampp\htdocs\" -Recurse
   ```

2. Start Apache and MySQL (e.g., using XAMPP control panel).

3. Create a MySQL database and import the schema/data from `sqlcommands.txt`.

   ```powershell
   # Example using mysql client (adjust username, password, dbname)
   mysql -u root -p your_database_name < sqlcommands.txt
   ```

4. Update the database connection settings in `Login/conn.php` to match your MySQL credentials and database name.

   - Open `Login/conn.php` and set the host, username, password, and database variables accordingly.

5. Point your browser to the app. If you placed the folder under `htdocs`, go to:

   `http://localhost/Cocoa-Time-Web-Application-main/Home/home.html`

## Project Structure

Root layout:

- `sqlcommands.txt` — SQL statements used to create tables and seed data.
- `about/` — About page and styles (`about-us.html`, `style.css`).
- `chocodrinks/` — Drink listing page (`chocodrinks.html`, `style.css`).
- `chocolates/` — Product pages and cart logic (`chocos.html`, `addto-cart.php`, `cart_data.php`, `cart.html`, `style.css`).
- `Home/` — Main home page and `logout.php` (`home.html`, `logout.php`, `style.css`).
- `img/` — Images used by the site.
- `Login/` — Authentication pages and DB connection (`login.html`, `login.php`, `conn.php`, `styles.css`).
- `Signup/` — Signup page and handler (`singup.html`, `signup.php`, `style.css`).

Notes:

- There is a filename typo: the signup form file is `Signup/singup.html` (missing the second `g`). Consider renaming to `signup.html` for consistency.
- Check CSS filenames and paths if styles are not loading (some directories use `style.css` and others `styles.css`).

## How to Use

- Register a new user via `Signup/singup.html` (or the signup page) and then login via `Login/login.html`.
- Browse products under `chocolates/` and `chocodrinks/` and click to add items to the cart.
- View the cart via `chocolates/cart.html` and proceed as the app's flow allows.

## Configuration

- `Login/conn.php` holds the MySQL connection configuration. Update the values for:

  - host (e.g., `localhost`)
  - username (e.g., `root`)
  - password
  - database name

- Ensure PHP sessions are enabled and writable (default on most setups).

## Security Recommendations

This project is a learning/demo app and should not be deployed to production as-is. Improve security before any public deployment:

- Use prepared statements or parameterized queries instead of interpolating values directly into SQL queries.
- Store passwords using strong hashing (e.g., `password_hash()` / `password_verify()` in PHP) and never store plain-text passwords.
- Validate and sanitize all user inputs on server side.
- Use HTTPS (TLS) in production to protect credentials and sessions.
- Harden session handling (regenerate IDs after login, set cookie flags `HttpOnly`, `Secure`).

## Common Troubleshooting

- 500 / PHP errors: enable display_errors in `php.ini` or check Apache/PHP error logs.
- Database connection errors: verify credentials in `Login/conn.php` and confirm the MySQL service is running.
- Missing images/styles: check file paths in HTML and ensure `img/` and CSS files exist at referenced locations.
- Signup/login not working: verify form action URLs and that the server-side `.php` handlers exist and are reachable.

## Known Issues & TODOs

- `Signup/singup.html` filename typo — consider renaming to `signup.html`.
- Consider consolidating CSS file names and paths for consistency.
- Replace any raw SQL concatenation with prepared statements in all `.php` files.

If you'd like, I can:

- Rename the signup file and update any references.
- Harden the PHP code by converting queries to prepared statements and adding password hashing.

## Contributing

- Feel free to open issues or submit pull requests to improve the code, fix typos, or add features.

When contributing, please:

- Describe the change clearly in your commit message.
- Keep PHP changes backward-compatible where possible.

## License

This project is provided as-is for educational purposes. Add a license file if you want to set licensing terms (e.g., MIT License).

## Contact

If you need help or want me to make follow-up improvements (fix filenames, harden authentication, add deployment instructions), reply here or open an issue in the repo.

---

Thank you for using Cocoa Time — I can also help patch the code (fix typos, add prepared statements, test locally) if you want.
