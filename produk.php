<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Get products
$products = getProducts();

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="page-header py-5" style="background-color: #1abcce;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold">Produk Susu Kambing</h1>
                <p class="lead">Nikmati berbagai varian susu kambing berkualitas dari Milk Leaf</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Varian Produk Kami</h2>
                <p class="mb-5">Kami menawarkan berbagai varian susu kambing 100% murni yang diolah dengan standar kualitas terbaik</p>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title"><?php echo $product['name']; ?></h3>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="product-price fw-bold"><?php echo formatRupiah($product['price']); ?></p>
                        <a href="beli.php?product=<?php echo $product['id']; ?>" class="btn btn-primary rounded-pill">Beli</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Kenapa Harus Memilih Susu Kambing Milk Leaf?</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-droplet-fill text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h3 class="card-title h5">100% Murni</h3>
                        <p class="card-text">Susu kambing Milk Leaf dibuat dari susu kambing segar pilihan tanpa bahan pengawet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-award-fill text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h3 class="card-title h5">Terjamin Kualitasnya</h3>
                        <p class="card-text">Diproses dengan teknologi terkini dan standar kualitas yang tinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-heart-fill text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h3 class="card-title h5">Menyehatkan</h3>
                        <p class="card-text">Mengandung nutrisi lengkap yang baik untuk kesehatan keluarga Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Order Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Cara Pemesanan</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="steps">
                    <div class="step d-flex mb-4">
                        <div class="step-number rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">1</div>
                        <div class="step-content">
                            <h4>Pilih Produk</h4>
                            <p>Pilih produk susu kambing yang Anda inginkan dan klik tombol "Beli".</p>
                        </div>
                    </div>
                    <div class="step d-flex mb-4">
                        <div class="step-number rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">2</div>
                        <div class="step-content">
                            <h4>Isi Data Diri</h4>
                            <p>Lengkapi data diri Anda dengan benar untuk memastikan pengiriman produk tepat sasaran.</p>
                        </div>
                    </div>
                    <div class="step d-flex mb-4">
                        <div class="step-number rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">3</div>
                        <div class="step-content">
                            <h4>Pilih Metode Pembayaran</h4>
                            <p>Kami menyediakan berbagai metode pembayaran yang aman dan nyaman untuk Anda.</p>
                        </div>
                    </div>
                    <div class="step d-flex">
                        <div class="step-number rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">4</div>
                        <div class="step-content">
                            <h4>Terima Produk</h4>
                            <p>Produk akan dikirim segera setelah pembayaran dikonfirmasi.</p>
                        </div>
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