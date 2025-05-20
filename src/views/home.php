<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Leaf - Susu Kambing Berkualitas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header/Navbar -->
    <header class="bg-primary">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="assets/images/logo.png" alt="Milk Leaf Logo" height="40">
                    <span class="ms-2 fw-bold">MILK LEAF</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produk.php">PRODUK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tentang-kami.php">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="beli-sekarang.php">BELI SEKARANG</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section with Milk Splash -->
    <section class="hero position-relative overflow-hidden">
        <div class="container position-relative py-5 z-index-1">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold text-primary"><?= $data['hero']['title'] ?></h1>
                    <h2 class="fw-bold my-3"><?= $data['hero']['subtitle'] ?></h2>
                    <p class="lead"><?= $data['hero']['tagline'] ?></p>
                </div>
            </div>
        </div>
        <div class="milk-splash position-absolute"></div>
        <div class="leaves position-absolute"></div>
    </section>

    <!-- Nutrition Section -->
    <section class="nutrition py-5 bg-primary text-white">
        <div class="container">
            <h2 class="text-center mb-5"><?= $data['nutrition']['title'] ?></h2>
            <div class="row">
                <?php foreach($data['nutrition']['items'] as $item): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-primary-light text-dark">
                        <img src="<?= $item['image'] ?>" class="card-img-top rounded-circle mx-auto mt-3" alt="Nutrisi" style="width: 120px; height: 120px; object-fit: cover;">
                        <div class="card-body text-center">
                            <p class="card-text"><?= $item['description'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits py-5">
        <div class="container">
            <h2 class="text-center mb-5"><?= $data['benefits']['title'] ?></h2>
            <div class="row">
                <?php foreach($data['benefits']['items'] as $item): ?>
                <div class="col-md-6 mb-4">
                    <div class="d-flex">
                        <div class="benefits-icon me-3">
                            <?php if($item['icon'] == 'check'): ?>
                            <i class="fas fa-check-circle text-success fa-2x"></i>
                            <?php elseif($item['icon'] == 'drop'): ?>
                            <i class="fas fa-tint text-danger fa-2x"></i>
                            <?php endif; ?>
                        </div>
                        <div>
                            <h4><?= $item['title'] ?></h4>
                            <p><?= $item['description'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Alternative Section -->
    <section class="alternative py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-4"><?= $data['alternative']['title'] ?></h2>
                    <p class="lead"><?= $data['alternative']['description'] ?></p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/images/lactose.jpg" alt="Lactose Intolerance" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="comparison py-5">
        <div class="container">
            <h2 class="text-center mb-5"><?= $data['comparison']['title'] ?></h2>
            <div class="row">
                <!-- Goat Milk -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-goat me-2"></i>
                                <h3 class="mb-0"><?= $data['comparison']['goat']['title'] ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <ol>
                                <?php foreach($data['comparison']['goat']['points'] as $point): ?>
                                <li class="mb-2"><?= $point ?></li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <!-- Cow Milk -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-cow me-2"></i>
                                <h3 class="mb-0"><?= $data['comparison']['cow']['title'] ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <ol>
                                <?php foreach($data['comparison']['cow']['points'] as $point): ?>
                                <li class="mb-2"><?= $point ?></li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"><?= $data['testimonials']['title'] ?></h2>
            <div class="row">
                <?php foreach($data['testimonials']['items'] as $testimonial): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 testimonial-card bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-3">
                                <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <i class="fas fa-star text-warning"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="card-text mb-4"><?= $testimonial['comment'] ?></p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <img src="assets/images/avatar-placeholder.jpg" alt="<?= $testimonial['name'] ?>" class="rounded-circle" width="50" height="50">
                                </div>
                                <h5 class="mb-0"><?= $testimonial['name'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h4>BERANDA</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white text-decoration-none">Beranda</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h4>PRODUK</h4>
                    <ul class="list-unstyled">
                        <li><a href="produk.php" class="text-white text-decoration-none">Susu Kambing</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h4>BELI SEKARANG</h4>
                    <ul class="list-unstyled">
                        <li><a href="beli-sekarang.php" class="text-white text-decoration-none">Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <div class="social-icons mb-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <p class="mb-0">© 2023 All rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html> 