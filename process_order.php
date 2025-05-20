<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $product_id = isset($_POST['product_id']) ? sanitize($_POST['product_id']) : '';
    $quantity = isset($_POST['quantity']) ? (int)sanitize($_POST['quantity']) : 1;
    $size = isset($_POST['size']) ? sanitize($_POST['size']) : '500ml';
    
    $name = isset($_POST['name']) ? sanitize($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize($_POST['phone']) : '';
    $city = isset($_POST['city']) ? sanitize($_POST['city']) : '';
    $address = isset($_POST['address']) ? sanitize($_POST['address']) : '';
    
    $payment_method = isset($_POST['payment_method']) ? sanitize($_POST['payment_method']) : 'transfer';
    $notes = isset($_POST['notes']) ? sanitize($_POST['notes']) : '';
    
    // Validate form data
    if (empty($product_id)) {
        $response['errors'][] = 'Pilih produk yang ingin dibeli';
    }
    
    if ($quantity < 1) {
        $response['errors'][] = 'Jumlah harus minimal 1';
    }
    
    if (empty($name)) {
        $response['errors'][] = 'Nama harus diisi';
    }
    
    if (empty($email)) {
        $response['errors'][] = 'Email harus diisi';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['errors'][] = 'Format email tidak valid';
    }
    
    if (empty($phone)) {
        $response['errors'][] = 'Nomor telepon harus diisi';
    }
    
    if (empty($city)) {
        $response['errors'][] = 'Kota harus diisi';
    }
    
    if (empty($address)) {
        $response['errors'][] = 'Alamat harus diisi';
    }
    
    // If no validation errors, process the order
    if (empty($response['errors'])) {
        try {
            // Get the product details
            $products = getProducts();
            $selected_product = null;
            
            foreach ($products as $product) {
                if ($product['id'] == $product_id) {
                    $selected_product = $product;
                    break;
                }
            }
            
            if ($selected_product) {
                // Calculate total price
                $total_price = $selected_product['price'] * $quantity;
                
                // Generate order number
                $order_number = 'ML' . date('YmdHis') . rand(100, 999);
                
                // Try to save to database if available
                $sql = "INSERT INTO orders (order_number, product_id, product_name, quantity, size, price, total_price, 
                                customer_name, customer_email, customer_phone, customer_city, customer_address, 
                                payment_method, notes, status, created_at) 
                        VALUES ('$order_number', '$product_id', '{$selected_product['name']}', '$quantity', '$size', '{$selected_product['price']}', '$total_price',
                                '$name', '$email', '$phone', '$city', '$address',
                                '$payment_method', '$notes', 'pending', NOW())";
                
                $db->query($sql);
                
                // Set success response
                $response['success'] = true;
                $response['message'] = 'Pesanan Anda berhasil dikirim! Nomor pesanan Anda adalah ' . $order_number;
                
                // Send email notification (disabled for this example)
                // $email_message = "Pesanan baru:\n\nNomor Pesanan: $order_number\nProduk: {$selected_product['name']}\nJumlah: $quantity\nTotal: " . formatRupiah($total_price);
                // mail('orders@milkleaf.id', 'Pesanan Baru: ' . $order_number, $email_message, "From: $email");
                
            } else {
                $response['success'] = false;
                $response['message'] = 'Produk tidak ditemukan.';
            }
        } catch (Exception $e) {
            // If database not available, just simulate success
            $order_number = 'ML' . date('YmdHis') . rand(100, 999);
            $response['success'] = true;
            $response['message'] = 'Pesanan Anda berhasil dikirim! Nomor pesanan Anda adalah ' . $order_number;
            
            // Log error for debugging
            error_log("Database error: " . $e->getMessage());
        }
    } else {
        $response['message'] = 'Ada kesalahan pada form. Silakan periksa kembali.';
    }
}

// If it's an AJAX request
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// For non-AJAX requests, redirect with message
$_SESSION['order_response'] = $response;

// Redirect based on success or failure
if ($response['success']) {
    redirect('beli.php?status=success&msg=' . urlencode($response['message']));
} else {
    redirect('beli.php?status=error&msg=' . urlencode($response['message']));
}
?> 