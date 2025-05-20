<?php
// Site information
$site_title = "Milk Leaf - Susu Kambing 100% Murni";
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg py-3" style="background-color: #1abcce;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <span class="text-dark fw-bold fs-3 me-2">MILK LEAF</span>
                    <img src="assets/images/goat-icon.png" alt="Milk Leaf Logo" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold mx-2 <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold mx-2 <?php echo ($current_page == 'produk.php') ? 'active' : ''; ?>" href="produk.php">PRODUK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold mx-2 <?php echo ($current_page == 'tentang.php') ? 'active' : ''; ?>" href="tentang.php">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold mx-2 <?php echo ($current_page == 'beli.php') ? 'active' : ''; ?>" href="beli.php">BELI SEKARANG</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main> 