<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="page-header py-5" style="background-color: #1abcce;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold">Tentang Kami</h1>
                <p class="lead">Mengenal lebih dekat dengan Milk Leaf</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="assets/images/about-us.jpg" alt="Tentang Milk Leaf" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Sejarah Kami</h2>
                <p>Milk Leaf didirikan pada tahun 2018 dengan visi untuk menyediakan pilihan susu yang lebih sehat dan mudah dicerna bagi masyarakat Indonesia. Berawal dari sebuah peternakan kecil di pedesaan Jawa Barat, kami mulai memproduksi susu kambing dengan metode tradisional yang dipadukan dengan teknologi modern.</p>
                <p>Nama "Milk Leaf" terinspirasi dari kombinasi susu kambing yang murni dan dedaunan hijau sebagai pakan utama kambing kami, yang mencerminkan komitmen kami terhadap produk alami dan ramah lingkungan.</p>
                <p>Dalam perjalanannya, Milk Leaf terus berkembang dan kini menjadi salah satu produsen susu kambing terkemuka di Indonesia dengan berbagai varian produk yang sehat dan berkualitas.</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4 text-center">Visi Kami</h3>
                        <p class="card-text">Menjadi produsen susu kambing terdepan yang menyediakan produk susu kambing berkualitas tinggi, serta memberikan manfaat kesehatan optimal bagi masyarakat Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4 text-center">Misi Kami</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Menghasilkan produk susu kambing berkualitas tinggi dengan standar higienis.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mengedukasi masyarakat tentang manfaat susu kambing untuk kesehatan.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mengembangkan inovasi produk yang sesuai dengan kebutuhan konsumen.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mendukung peternak lokal dengan praktik bisnis yang berkelanjutan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Farm Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Peternakan Kami</h2>
                <p class="mb-5">Peternakan kambing kami menerapkan standar tertinggi dalam pengelolaan dan perawatan hewan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="assets/images/farm-1.jpg" class="card-img-top" alt="Kambing Berkualitas">
                    <div class="card-body">
                        <h4 class="card-title">Kambing Berkualitas</h4>
                        <p class="card-text">Kami memilih jenis kambing Etawa yang dikenal memiliki produksi susu yang tinggi dan berkualitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="assets/images/farm-2.jpg" class="card-img-top" alt="Pakan Organik">
                    <div class="card-body">
                        <h4 class="card-title">Pakan Organik</h4>
                        <p class="card-text">Kambing kami diberi pakan organik berkualitas untuk menghasilkan susu dengan nutrisi terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="assets/images/farm-3.jpg" class="card-img-top" alt="Proses Higienis">
                    <div class="card-body">
                        <h4 class="card-title">Proses Higienis</h4>
                        <p class="card-text">Proses pemerahan susu dilakukan dengan standar higienis tinggi untuk menjaga kualitas susu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Tim Kami</h2>
                <p class="mb-5">Orang-orang hebat di balik kesuksesan Milk Leaf</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <img src="assets/images/team-1.jpg" class="rounded-circle mb-3" width="150" height="150" alt="CEO">
                        <h4>Ahmad Fauzi</h4>
                        <p class="text-muted">CEO & Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <img src="assets/images/team-2.jpg" class="rounded-circle mb-3" width="150" height="150" alt="Production Manager">
                        <h4>Dewi Sartika</h4>
                        <p class="text-muted">Production Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <img src="assets/images/team-3.jpg" class="rounded-circle mb-3" width="150" height="150" alt="Marketing Manager">
                        <h4>Budi Santoso</h4>
                        <p class="text-muted">Marketing Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <img src="assets/images/team-4.jpg" class="rounded-circle mb-3" width="150" height="150" alt="Quality Control">
                        <h4>Siti Rahma</h4>
                        <p class="text-muted">Quality Control</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="mb-5">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Informasi Kontak</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-4">
                                <i class="bi bi-geo-alt-fill me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h5 class="mb-1">Alamat</h5>
                                    <p class="mb-0">Jl. Susu Kambing No. 123, Jakarta Selatan, Indonesia</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <i class="bi bi-telephone-fill me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h5 class="mb-1">Telepon</h5>
                                    <p class="mb-0">+62 812 3456 7890</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <i class="bi bi-envelope-fill me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h5 class="mb-1">Email</h5>
                                    <p class="mb-0">info@milkleaf.id</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-clock-fill me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h5 class="mb-1">Jam Operasional</h5>
                                    <p class="mb-0">Senin - Jumat: 08.00 - 17.00<br>Sabtu: 08.00 - 15.00<br>Minggu: Tutup</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Kirim Pesan</h4>
                        <form id="contact-form" method="post" action="process_contact.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include 'includes/footer.php';
?> 