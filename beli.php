<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Get products
$products = getProducts();

// Get selected product if any
$product_id = isset($_GET['product']) ? (int)$_GET['product'] : 0;
$selected_product = null;

// Find the selected product
if ($product_id > 0) {
    foreach ($products as $product) {
        if ($product['id'] == $product_id) {
            $selected_product = $product;
            break;
        }
    }
}

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="page-header py-5" style="background-color: #1abcce;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold">Beli Sekarang</h1>
                <p class="lead">Dapatkan produk susu kambing berkualitas dari Milk Leaf</p>
            </div>
        </div>
    </div>
</section>

<!-- Order Form Section -->
<section class="py-5">
    <div class="container">
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert alert-success mb-4">
            <?php echo isset($_GET['msg']) ? $_GET['msg'] : 'Pesanan Anda berhasil dikirim!'; ?>
        </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="card-title text-center mb-4">Form Pemesanan</h2>
                        <form id="order-form" method="post" action="process_order.php">
                            <div class="row g-3">
                                <!-- Product Selection -->
                                <div class="col-12 mb-3">
                                    <label for="product" class="form-label">Pilih Produk</label>
                                    <select class="form-select" id="product" name="product_id" required>
                                        <option value="">-- Pilih Produk --</option>
                                        <?php foreach ($products as $product): ?>
                                        <option value="<?php echo $product['id']; ?>" <?php echo ($selected_product && $selected_product['id'] == $product['id']) ? 'selected' : ''; ?>>
                                            <?php echo $product['name']; ?> - <?php echo formatRupiah($product['price']); ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <!-- Quantity -->
                                <div class="col-md-6 mb-3">
                                    <label for="quantity" class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="size" class="form-label">Ukuran</label>
                                    <select class="form-select" id="size" name="size">
                                        <option value="250ml">250ml</option>
                                        <option value="500ml" selected>500ml</option>
                                        <option value="1L">1 Liter</option>
                                    </select>
                                </div>
                                
                                <!-- Customer Information -->
                                <div class="col-12">
                                    <h4 class="mt-4 mb-3">Informasi Pemesan</h4>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label for="address" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                </div>
                                
                                <!-- Payment Method -->
                                <div class="col-12">
                                    <h4 class="mt-4 mb-3">Metode Pembayaran</h4>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="payment_method" id="transfer" value="transfer" checked>
                                        <label class="form-check-label" for="transfer">
                                            Transfer Bank
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="payment_method" id="ewallet" value="ewallet">
                                        <label class="form-check-label" for="ewallet">
                                            E-Wallet (OVO, GoPay, DANA)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod">
                                        <label class="form-check-label" for="cod">
                                            Cash on Delivery (COD)
                                        </label>
                                    </div>
                                </div>
                                
                                <!-- Notes -->
                                <div class="col-12 mb-3">
                                    <label for="notes" class="form-label">Catatan (opsional)</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill">Pesan Sekarang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Order Process Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-title">Proses Pemesanan</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row g-4">
                    <div class="col-md-3 text-center">
                        <div class="process-step">
                            <div class="process-icon mb-3">
                                <i class="bi bi-cart-check text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5>1. Pesan</h5>
                            <p>Isi form pemesanan dengan data yang lengkap dan benar</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="process-step">
                            <div class="process-icon mb-3">
                                <i class="bi bi-credit-card text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5>2. Bayar</h5>
                            <p>Lakukan pembayaran sesuai dengan metode yang dipilih</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="process-step">
                            <div class="process-icon mb-3">
                                <i class="bi bi-box-seam text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5>3. Proses</h5>
                            <p>Pesanan Anda akan diproses dan dikirim segera</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="process-step">
                            <div class="process-icon mb-3">
                                <i class="bi bi-truck text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5>4. Terima</h5>
                            <p>Pesanan diantar ke alamat Anda dalam kondisi segar</p>
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