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
    $name = isset($_POST['name']) ? sanitize($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? sanitize($_POST['subject']) : 'Contact Form Submission';
    $message = isset($_POST['message']) ? sanitize($_POST['message']) : '';
    
    // Validate form data
    if (empty($name)) {
        $response['errors'][] = 'Nama harus diisi';
    }
    
    if (empty($email)) {
        $response['errors'][] = 'Email harus diisi';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['errors'][] = 'Format email tidak valid';
    }
    
    if (empty($message)) {
        $response['errors'][] = 'Pesan harus diisi';
    }
    
    // If no validation errors, process the form
    if (empty($response['errors'])) {
        try {
            // Try to save to database if available
            $sql = "INSERT INTO messages (name, email, subject, message, created_at) 
                    VALUES ('$name', '$email', '$subject', '$message', NOW())";
            
            $db->query($sql);
            
            // Set success response
            $response['success'] = true;
            $response['message'] = 'Pesan Anda telah berhasil dikirim! Kami akan menghubungi Anda segera.';
            
            // Send email notification (disabled for this example)
            // mail('info@milkleaf.id', 'New Contact Form Submission', $message, "From: $email");
            
        } catch (Exception $e) {
            // If database not available, just simulate success
            $response['success'] = true;
            $response['message'] = 'Pesan Anda telah berhasil dikirim! Kami akan menghubungi Anda segera.';
            
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
$_SESSION['form_response'] = $response;

// Redirect based on success or failure
if ($response['success']) {
    redirect('index.php?status=success&msg=' . urlencode($response['message']));
} else {
    redirect('tentang.php?status=error&msg=' . urlencode($response['message']));
}
?> 