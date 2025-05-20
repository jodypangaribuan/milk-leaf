<?php
/**
 * Milk Leaf - Main Entry Point
 * 
 * This is the main entry point for the Milk Leaf website
 */

// Define the base path
define('BASE_PATH', dirname(__DIR__));

// Include necessary files
require_once BASE_PATH . '/src/controllers/HomeController.php';

// Simple routing
$route = $_GET['route'] ?? 'home';

// Route to the appropriate controller
switch ($route) {
    case 'home':
    default:
        $controller = new HomeController();
        $controller->index();
        break;
    
    case 'products':
        // Product controller (to be implemented)
        echo "Products page coming soon";
        break;
    
    case 'about':
        // About controller (to be implemented)
        echo "About page coming soon";
        break;
    
    case 'shop':
        // Shop controller (to be implemented)
        echo "Shop page coming soon";
        break;
} 