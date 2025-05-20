<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Leaf - Susu Kambing Premium Berkualitas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header/Navbar -->
    <header class="bg-primary fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark container" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="assets/images/logo.png" alt="Milk Leaf Logo" height="45">
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
    <section class="hero position-relative overflow-hidden pt-5 mt-5">
        <div class="container position-relative py-5 z-index-1">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="badge bg-primary rounded-pill px-3 py-2 mb-3">100% Alami</span>
                    <h1 class="display-3 fw-bold text-primary"><?= $data['hero']['title'] ?></h1>
                    <h2 class="fw-bold my-3"><?= $data['hero']['subtitle'] ?></h2>
                    <p class="lead"><?= $data['hero']['tagline'] ?></p>
                    <div class="hero-btn-group">
                        <a href="produk.php" class="btn btn-primary btn-lg">Lihat Produk</a>
                        <a href="tentang-kami.php" class="btn btn-outline-primary btn-lg">Tentang Kami</a>
                    </div>

                    <div class="mt-5 d-flex align-items-center">
                        <div class="d-flex me-4">
                            <span class="h4 mb-0 me-2"><i class="fas fa-star text-warning"></i></span>
                            <div>
                                <p class="fw-bold mb-0">Terbaik</p>
                                <p class="small mb-0">Produk Unggulan</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="h4 mb-0 me-2"><i class="fas fa-certificate text-primary"></i></span>
                            <div>
                                <p class="fw-bold mb-0">Bersertifikat</p>
                                <p class="small mb-0">Teruji & Terjamin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                    <img src="assets/images/milk-bottle.png" alt="Milk Leaf Product" class="img-fluid hero-product">
                </div>
            </div>
        </div>
        <div class="milk-splash position-absolute"></div>
        <div class="leaves position-absolute"></div>
    </section>

    <!-- Features Bar -->
    <section class="features-bar py-4 bg-white shadow-sm">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fa-leaf fa-2x text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0 fw-bold">100% Alami</h5>
                            <p class="mb-0 small">Tanpa bahan pengawet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fa-truck fa-2x text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0 fw-bold">Pengiriman Cepat</h5>
                            <p class="mb-0 small">Ke seluruh Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fa-award fa-2x text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0 fw-bold">Produk Terbaik</h5>
                            <p class="mb-0 small">Kualitas terjamin</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fa-headset fa-2x text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0 fw-bold">Dukungan 24/7</h5>
                            <p class="mb-0 small">Siap membantu Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about py-5" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="assets/images/about-milk.jpg" alt="About Milk Leaf" class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6">
                    <span class="text-primary fw-semibold">TENTANG KAMI</span>
                    <h2 class="fw-bold mb-4">Susu Kambing Premium dengan Kualitas Terbaik</h2>
                    <p class="lead mb-4">Milk Leaf menghadirkan susu kambing berkualitas premium yang diproses dengan teknologi modern namun tetap mempertahankan keaslian nutrisi dan manfaatnya.</p>
                    <div class="d-flex mb-3">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <p>Diproduksi dari kambing pilihan yang dipelihara di peternakan terbaik</p>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <p>Proses produksi higienis dengan standar internasional</p>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <p>Dijamin keamanan dan nutrisinya untuk seluruh keluarga</p>
                    </div>
                    <a href="tentang-kami.php" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nutrition Section -->
    <section class="nutrition py-5 bg-primary text-white">
        <div class="container">
            <h2 class="text-center mb-5 section-title" data-aos="fade-up"><?= $data['nutrition']['title'] ?></h2>
            <div class="row">
                <?php foreach($data['nutrition']['items'] as $index => $item): ?>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
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

    <!-- Product Highlight -->
    <section class="product-highlight py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 section-title" data-aos="fade-up">Produk Unggulan Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 product-card">
                        <div class="position-relative">
                            <img src="assets/images/product-original.jpg" class="card-img-top" alt="Susu Kambing Original">
                            <span class="badge bg-primary position-absolute top-0 end-0 mt-2 me-2">Terlaris</span>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Susu Kambing Original</h4>
                            <p class="card-text">Susu kambing murni dengan rasa original dan kaya nutrisi.</p>
                            <p class="price fw-bold text-primary">Rp 35.000</p>
                            <a href="beli-sekarang.php?product=original" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 product-card">
                        <div class="position-relative">
                            <img src="assets/images/product-honey.jpg" class="card-img-top" alt="Susu Kambing Madu">
                            <span class="badge bg-accent position-absolute top-0 end-0 mt-2 me-2">Baru</span>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Susu Kambing Madu</h4>
                            <p class="card-text">Susu kambing dengan tambahan madu alami untuk kesehatan.</p>
                            <p class="price fw-bold text-primary">Rp 40.000</p>
                            <a href="beli-sekarang.php?product=honey" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 product-card">
                        <img src="assets/images/product-chocolate.jpg" class="card-img-top" alt="Susu Kambing Cokelat">
                        <div class="card-body text-center">
                            <h4 class="card-title">Susu Kambing Cokelat</h4>
                            <p class="card-text">Susu kambing dengan rasa cokelat yang lezat dan bergizi.</p>
                            <p class="price fw-bold text-primary">Rp 38.000</p>
                            <a href="beli-sekarang.php?product=chocolate" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <a href="produk.php" class="btn btn-outline-primary">Lihat Semua Produk</a>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits py-5">
        <div class="container">
            <h2 class="text-center mb-5 section-title" data-aos="fade-up"><?= $data['benefits']['title'] ?></h2>
            <div class="row">
                <?php foreach($data['benefits']['items'] as $index => $item): ?>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?= $index * 150 ?>">
                    <div class="card h-100">
                        <div class="card-body d-flex">
                            <div class="benefits-icon">
                                <?php if($item['icon'] == 'check'): ?>
                                <i class="fas fa-check-circle text-success fa-2x"></i>
                                <?php elseif($item['icon'] == 'drop'): ?>
                                <i class="fas fa-tint text-danger fa-2x"></i>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h4><?= $item['title'] ?></h4>
                                <p class="mb-0"><?= $item['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100">
                        <div class="card-body d-flex">
                            <div class="benefits-icon">
                                <i class="fas fa-heart text-warning fa-2x"></i>
                            </div>
                            <div>
                                <h4>Baik untuk Jantung</h4>
                                <p class="mb-0">Kandungan asam lemak dalam susu kambing membantu menurunkan kadar kolesterol dan baik untuk kesehatan jantung.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="card h-100">
                        <div class="card-body d-flex">
                            <div class="benefits-icon">
                                <i class="fas fa-shield-alt text-primary fa-2x"></i>
                            </div>
                            <div>
                                <h4>Meningkatkan Imunitas</h4>
                                <p class="mb-0">Susu kambing mengandung senyawa yang membantu meningkatkan sistem kekebalan tubuh dan melawan infeksi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta py-5 text-white text-center" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Rasakan Manfaatnya Sekarang</h2>
                    <p class="lead mb-4">Dapatkan susu kambing Milk Leaf dengan kualitas terbaik untuk kesehatan Anda dan keluarga</p>
                    <a href="beli-sekarang.php" class="btn btn-light btn-lg px-5">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Alternative Section -->
    <section class="alternative py-5 text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h2 class="mb-4"><?= $data['alternative']['title'] ?></h2>
                    <p class="lead"><?= $data['alternative']['description'] ?></p>
                    <a href="produk.php" class="btn btn-light mt-3">Lihat Produk Kami</a>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">
                    <img src="assets/images/lactose.jpg" alt="Lactose Intolerance" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="comparison py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 section-title" data-aos="fade-up"><?= $data['comparison']['title'] ?></h2>
            <div class="row">
                <!-- Goat Milk -->
                <div class="col-md-6 mb-4" data-aos="fade-right">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-goat me-2"></i>
                                <h3 class="mb-0"><?= $data['comparison']['goat']['title'] ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php foreach($data['comparison']['goat']['points'] as $point): ?>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <span><?= $point ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Cow Milk -->
                <div class="col-md-6 mb-4" data-aos="fade-left">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-cow me-2"></i>
                                <h3 class="mb-0"><?= $data['comparison']['cow']['title'] ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php foreach($data['comparison']['cow']['points'] as $point): ?>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-info-circle text-secondary me-2 mt-1"></i>
                                    <span><?= $point ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5">
        <div class="container">
            <h2 class="text-center mb-5 section-title" data-aos="fade-up"><?= $data['testimonials']['title'] ?></h2>
            <div class="row">
                <?php foreach($data['testimonials']['items'] as $index => $testimonial): ?>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                    <div class="card h-100 testimonial-card">
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

    <!-- Newsletter Section -->
    <section class="newsletter py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h3 class="mb-4">Dapatkan Kabar Terbaru & Promo Spesial</h3>
                    <p class="mb-4">Berlangganan newsletter kami untuk mendapatkan informasi produk terbaru dan promo menarik</p>
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Masukkan email Anda">
                        </div>
                        <div class="col-md-auto">
                            <button type="submit" class="btn btn-primary btn-lg">Berlangganan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/logo.png" alt="Milk Leaf Logo" height="50" class="me-2">
                        <h4 class="mb-0">MILK LEAF</h4>
                    </div>
                    <p>Susu kambing premium dengan kualitas terbaik untuk kebahagiaan keluarga Anda. 100% alami dan bergizi tinggi.</p>
                    <div class="social-icons">
                        <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4 fw-bold">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="produk.php" class="text-white text-decoration-none">Produk</a></li>
                        <li class="mb-2"><a href="tentang-kami.php" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li><a href="beli-sekarang.php" class="text-white text-decoration-none">Beli Sekarang</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4 fw-bold">Produk Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="produk.php?type=original" class="text-white text-decoration-none">Susu Kambing Original</a></li>
                        <li class="mb-2"><a href="produk.php?type=honey" class="text-white text-decoration-none">Susu Kambing Madu</a></li>
                        <li><a href="produk.php?type=chocolate" class="text-white text-decoration-none">Susu Kambing Cokelat</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 fw-bold">Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex align-items-start">
                            <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                            <span>Jl. Susu Kambing No. 123, Jakarta, Indonesia</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <i class="fas fa-phone-alt me-3 mt-1"></i>
                            <span>+62 812 3456 7890</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-envelope me-3 mt-1"></i>
                            <span>info@milkleaf.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="my-4 bg-white opacity-25">

            <div class="row mt-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0">© 2023 Milk Leaf. All rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html> 