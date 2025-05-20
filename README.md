# MILK LEAF Website

A clean website for Milk Leaf, a goat milk product brand, built with PHP, MySQL, and Bootstrap.

## Project Structure

The project follows a clean architecture pattern with MVC design:

```
milk-leaf/
├── assets/
│   ├── css/           # CSS files
│   ├── js/            # JavaScript files
│   └── images/        # Image files (add your own images)
├── database/
│   └── milk_leaf_db.sql  # Database setup script
├── public/
│   └── index.php      # Main entry point
└── src/
    ├── config/        # Configuration files
    ├── controllers/   # Controller classes
    ├── models/        # Model classes
    └── views/         # View templates
```

## Requirements

* PHP 7.4 or higher
* MySQL 5.7 or higher
* Web server (Apache/Nginx)
* Composer (optional, for future dependencies)

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/milk-leaf.git
   cd milk-leaf
   ```

2. Set up the database:
   ```
   mysql -u username -p < database/milk_leaf_db.sql
   ```

3. Configure the database connection:
   Edit `src/config/database.php` with your database credentials.

4. Set up your web server:
   Configure your web server to point to the `public/` directory as the web root.

5. For Apache, create a `.htaccess` file in the `public/` directory:
   ```
   RewriteEngine On
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteRule ^(.*)$ index.php?route=$1 [QSA,L]
   ```

6. Visit the website in your browser!

## Usage

- The main page shows information about Milk Leaf goat milk products
- Navigation menu links to different sections of the website
- The website showcases nutrition information, benefits, and comparisons

## Adding Images

For the website to display correctly, you'll need to add these images to the `assets/images/` directory:

1. `logo.png` - The Milk Leaf brand logo
2. `milk-splash.png` - Background milk splash image
3. `leaves.png` - Decorative leaves image
4. `nutrition1.jpg`, `nutrition2.jpg`, `nutrition3.jpg` - Nutrition section images
5. `lactose.jpg` - Image for lactose intolerance section
6. `avatar-placeholder.jpg` - Placeholder for testimonial avatars

## Customization

- Edit `src/models/ContentModel.php` to modify website content
- Update styles in `assets/css/style.css`
- Modify the database structure in `database/milk_leaf_db.sql`

## License

This project is licensed under the MIT License. 