<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Get testimonials
$testimonials = getTestimonials();

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row min-vh-75 align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">MILK LEAF</h1>
                <h2 class="mb-4">Pilihan Terbaik untuk<br>Kebugaran Keluarga Anda.</h2>
                <div class="badge rounded-pill bg-white text-primary px-4 py-2 mb-4 fs-6">
                    100% murni susu kambing
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nutrition Content Section -->
<section class="py-5" style="background-color: #1abcce; color: #fff;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title text-white">Kandungan Nutrisi Dalam Susu Kambing</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 h-100 bg-transparent text-center">
                    <div class="card-body">
                        <img src="assets/images/nutrisi-1.jpg" alt="Nutrisi" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                        <h5 class="card-title text-white">Kaya Akan Nutrisi</h5>
                        <p class="card-text">berperan penting dalam pembentukan hemoglobin, yaitu protein dalam sel darah merah yang membawa oksigen ke seluruh tubuh.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 h-100 bg-transparent text-center">
                    <div class="card-body">
                        <img src="assets/images/nutrisi-2.jpg" alt="Pencernaan" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                        <h5 class="card-title text-white">Sehat untuk Pencernaan</h5>
                        <p class="card-text">berperan membantu pembentukan dan pemeliharaan tulang yang kuat, serta berperan dalam kontraksi otot dan kesehatan jantung.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 h-100 bg-transparent text-center">
                    <div class="card-body">
                        <img src="assets/images/nutrisi-3.jpg" alt="Imunitas" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                        <h5 class="card-title text-white">Meningkatkan Imunitas</h5>
                        <p class="card-text">bermanfaat untuk menjaga kesehatan tubuh dan gigi, membantu fungsi sel darah merah, serta berfungsi sebagai antioksidan yang optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Manfaat Susu Kambing</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Menjaga Kesehatan Tulang dan Gigi</h3>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <span class="icon-check me-3 text-success"><i class="bi bi-check-circle-fill fs-4"></i></span>
                        <span>Kaya akan kalsium dan fosfor yang membantu mempertahankan tulang dan gigi yang kuat.</span>
                    </li>
                </ul>
                
                <h3 class="mb-4 mt-5">Mudah Dicerna</h3>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <span class="icon-check me-3 text-warning"><i class="bi bi-star-fill fs-4"></i></span>
                        <span>Susu kambing memiliki struktur lemak dan protein yang lebih halus, menjadikan susu sapi – cocok untuk penderita intoleransi laktosa ringan.</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="assets/images/manfaat.jpg" alt="Manfaat Susu Kambing" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Alternative for Lactose Intolerance Section -->
<section class="py-5" style="background-color: #1abcce; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title text-white">Alternatif bagi yang Intoleransi Laktosa</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="assets/images/laktosa.jpg" alt="Intoleransi Laktosa" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <p class="lead">Susu kambing mengandung partikel lemak yang lebih kecil bagi mereka yang mengalami intoleransi laktosa ringan. Kandungan laktosa dalam susu kambing lebih rendah dari susu sapi, dan struktur kimianya berbeda sehingga lebih mudah dicerna.</p>
                <p>Selain itu, protein dalam susu kambing memiliki karakteristik yang menyerupainya lebih mudah dicerna sehingga mengurangi risiko alergi atau gangguan pencernaan. Ini juga menyebabkan susu kambing menjadi alternatif yang baik bagi orang dengan intoleransi laktosa atau sensitivitas terhadap susu sapi.</p>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Perbandingan Susu Kambing dan Susu Sapi</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="comparison-block mb-4">
                    <h4 class="mb-3">Susu Kambing</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">1. Mudah dicerna karena ukuran lemak dan protein lebih kecil</li>
                        <li class="mb-2">2. Kadar laktosa rendah, cocok untuk intoleransi ringan</li>
                        <li class="mb-2">3. Mengandung protein A2, lebih mudah dicerna oleh tubuh</li>
                        <li class="mb-2">4. Kaya mineral seperti kalsium, fosfor, dan zat besi</li>
                        <li class="mb-2">5. Rasa yang khas, variasi bagi yang bosan dengan susu tradisional</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 text-center d-none d-md-block">
                <img src="assets/images/goat-icon.png" alt="Kambing" class="mb-4" width="60">
                <div class="comparison-divider"></div>
                <img src="assets/images/cow-icon.png" alt="Sapi" class="mt-4" width="60">
            </div>
            <div class="col-md-5">
                <div class="comparison-block mb-4">
                    <h4 class="mb-3">Susu Sapi</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">1. Lebih tinggi laktosa, bisa sebabkan gangguan pencernaan</li>
                        <li class="mb-2">2. Lemak lebih sulit dicerna dan dapat menghasilkan racun</li>
                        <li class="mb-2">3. Gangguan pencernaan sensori</li>
                        <li class="mb-2">4. Tinggi mineral, baik untuk pertumbuhan dan perkembangan</li>
                        <li class="mb-2">5. Rasa netral dan familiar, mudah dikonsumsi dengan makanan/minuman lain</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Testimoni Pelanggan</h2>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($testimonials as $testimonial) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="<?php echo $testimonial['image']; ?>" class="rounded-circle" width="60" height="60" alt="<?php echo $testimonial['name']; ?>">
                            <div class="ms-3">
                                <h5 class="mb-0"><?php echo $testimonial['name']; ?></h5>
                                <small class="text-muted"><?php echo $testimonial['location']; ?></small>
                                <div class="rating">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <i class="bi bi-star<?php echo ($i <= $testimonial['rating']) ? '-fill text-warning' : ''; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <p class="card-text">"<?php echo $testimonial['comment']; ?>"</p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
// Include footer
include 'includes/footer.php';
?> 