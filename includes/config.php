<?php
// Site Configuration
define('SITE_NAME', 'Milk Leaf');
define('SITE_URL', 'http://localhost/milk-leaf');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'milk_leaf_db');

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 