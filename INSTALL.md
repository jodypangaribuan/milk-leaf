# Milk Leaf Website - Installation Guide

## Requirements

- PHP 7.4 or higher
- MySQL/MariaDB database (optional, the site has fallbacks if no database is available)
- Web server (Apache, Nginx, or PHP built-in server)

## Installation Steps

### 1. Set up the Project

1. Clone or download the project to your desired location:
   ```
   git clone https://github.com/yourusername/milk-leaf.git
   ```
   
2. Navigate to the project directory:
   ```
   cd milk-leaf
   ```

### 2. Database Setup (Optional)

If you want to use a database for storing form submissions and orders:

1. Create a new MySQL database called `milk_leaf_db`.

2. Import the SQL schema file to create the required tables:
   ```
   mysql -u username -p milk_leaf_db < database/schema.sql
   ```

3. Update the database connection settings in `includes/config.php` with your database credentials:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_username');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'milk_leaf_db');
   ```

### 3. Serving the Website

#### Using PHP's Built-in Server (for development)

PHP includes a built-in web server that's great for development:

```
php -S localhost:8000
```

Then visit http://localhost:8000 in your browser.

#### Using Apache

1. Place the project in your Apache document root (e.g., `/var/www/html/milk-leaf`).
2. Configure Apache to serve the site (you may need to set up a virtual host).
3. Ensure that `mod_rewrite` is enabled if you plan to use pretty URLs.

#### Using Nginx

1. Place the project in your Nginx document root (e.g., `/var/www/milk-leaf`).
2. Configure Nginx to serve the site with PHP processing.

Example Nginx configuration:
```nginx
server {
    listen 80;
    server_name milk-leaf.local;
    root /var/www/milk-leaf;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### 4. Windows-Specific Setup for WSL Users

If you're using Windows Subsystem for Linux (WSL) and want to view the site from a Windows browser:

1. Start the PHP server with the following command to allow external access:
   ```
   php -S 0.0.0.0:8000
   ```

2. Find your WSL IP address:
   ```
   ip addr show eth0 | grep "inet\b" | awk '{print $2}' | cut -d/ -f1
   ```

3. Access the site from your Windows browser using that IP:
   ```
   http://your_wsl_ip:8000
   ```

### 5. Image Assets

This project requires several images. You can:

1. Add your own images to the `assets/images/` directory.
2. Follow the image naming convention described in `assets/images/README.md`.

### 6. Troubleshooting

- If you see "Database Connection Error" messages, it's likely the database configuration is incorrect or the database server is not running.
- Ensure the web server has write permissions to any directories where uploads or logs would be stored.
- Check PHP error logs if you encounter issues.

## Production Deployment

For a production environment:

1. Update `includes/config.php` to disable error reporting:
   ```php
   error_reporting(0);
   ini_set('display_errors', 0);
   ```

2. Update the `SITE_URL` to your actual domain:
   ```php
   define('SITE_URL', 'https://yourdomain.com');
   ```

3. Make sure all file permissions are set correctly for security.

4. Consider setting up HTTPS for secure connections. 