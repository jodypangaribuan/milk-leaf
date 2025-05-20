<?php
require_once 'config.php';
require_once 'db.php';

/**
 * Utility functions for the Milk Leaf website
 */

/**
 * Clean and sanitize input data
 *
 * @param string $data The input data to sanitize
 * @return string The sanitized data
 */
function sanitize($data) {
    global $db;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $db->escape($data);
}

/**
 * Redirect to a specific URL
 *
 * @param string $url The URL to redirect to
 * @return void
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Display a formatted error message
 *
 * @param string $message The error message to display
 * @return string The formatted HTML error message
 */
function showError($message) {
    return "<div class='alert alert-danger'>{$message}</div>";
}

/**
 * Display a formatted success message
 *
 * @param string $message The success message to display
 * @return string The formatted HTML success message
 */
function showSuccess($message) {
    return "<div class='alert alert-success'>{$message}</div>";
}

/**
 * Get product data
 *
 * @return array Array of product data
 */
function getProducts() {
    global $db;
    
    try {
        return $db->select("SELECT * FROM products WHERE active = 1 ORDER BY id DESC");
    } catch (Exception $e) {
        // If database is not set up yet, return sample data
        return [
            [
                'id' => 1,
                'name' => 'Susu Kambing Original',
                'description' => 'Susu kambing murni tanpa tambahan apapun, rasakan keasliannya.',
                'price' => 25000,
                'image' => 'assets/images/product-original.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Susu Kambing Madu',
                'description' => 'Perpaduan susu kambing dengan madu alami untuk rasa yang lebih manis.',
                'price' => 30000,
                'image' => 'assets/images/product-honey.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Susu Kambing Kurma',
                'description' => 'Kombinasi sehat susu kambing dengan ekstrak kurma untuk energi ekstra.',
                'price' => 35000,
                'image' => 'assets/images/product-dates.jpg'
            ]
        ];
    }
}

/**
 * Get testimonial data
 *
 * @return array Array of testimonial data
 */
function getTestimonials() {
    global $db;
    
    try {
        return $db->select("SELECT * FROM testimonials WHERE active = 1 ORDER BY id DESC LIMIT 6");
    } catch (Exception $e) {
        // If database is not set up yet, return sample data
        return [
            [
                'id' => 1,
                'name' => 'Anisa',
                'location' => 'Jakarta',
                'rating' => 5,
                'comment' => 'Susu kambing ini enak sekali! Saya suka rasanya dan sangat bermanfaat untuk pencernaan.',
                'image' => 'assets/images/testimonial-1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Budi',
                'location' => 'Bandung',
                'rating' => 5,
                'comment' => 'Saya telah mencoba berbagai produk susu kambing, tapi yang ini yang terbaik! Tidak berbau amis.',
                'image' => 'assets/images/testimonial-2.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Siti',
                'location' => 'Surabaya',
                'rating' => 5,
                'comment' => 'Anak saya sangat suka susu kambing ini. Sekarang dia minum susu tanpa dipaksa!',
                'image' => 'assets/images/testimonial-3.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Arif',
                'location' => 'Yogyakarta',
                'rating' => 5,
                'comment' => 'Saya rutin minum susu kambing setiap pagi dan merasa lebih berenergi sepanjang hari.',
                'image' => 'assets/images/testimonial-4.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Rina',
                'location' => 'Semarang',
                'rating' => 5,
                'comment' => 'Susu sapi bikin saya sakit perut, tapi susu kambing ini tidak. Rasanya enak dan lebih sehat!',
                'image' => 'assets/images/testimonial-5.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Wawan',
                'location' => 'Bali',
                'rating' => 5,
                'comment' => 'Saya suka varian madu, manis alami dan lebih nikmat. Pengiriman juga cepat!',
                'image' => 'assets/images/testimonial-6.jpg'
            ]
        ];
    }
}

/**
 * Format price in Indonesian Rupiah
 *
 * @param float $price The price to format
 * @return string The formatted price
 */
function formatRupiah($price) {
    return 'Rp ' . number_format($price, 0, ',', '.');
} 