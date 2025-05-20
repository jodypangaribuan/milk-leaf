# Milk Leaf - Website Susu Kambing

Website promosi untuk produk susu kambing "Milk Leaf".

## Struktur Folder

- `index.html` - File HTML utama
- `assets/images/` - Folder untuk menyimpan gambar
- `.github/workflows/` - Konfigurasi GitHub Actions untuk GitHub Pages

## Gambar yang Dibutuhkan

Untuk menjalankan website dengan benar, pastikan semua gambar berikut sudah ada di folder `assets/images/`:

1. `logo.png` - Logo Milk Leaf
2. `carousel.png` - Gambar carousel
3. `nutrition1.png`, `nutrition2.png`, `nutrition3.png` - Gambar untuk section kandungan nutrisi
4. `lactose-alt.jpg` - Gambar untuk section alternatif laktosa
5. `testimonial1.jpg` sampai `testimonial6.jpg` - Foto testimonial

### Mengatasi Gambar yang Hilang

Jika beberapa gambar testimonial atau lactose-alt.jpg tidak tersedia:

1. Buka file `generate-placeholder.html` di browser
2. Ikuti instruksi untuk membuat gambar placeholder
3. Simpan gambar-gambar tersebut ke folder `assets/images/`

## Teknologi yang Digunakan

- HTML5
- CSS3
- Bootstrap 5
- Font Awesome (untuk icon)
- Bootstrap Icons

## Cara Menjalankan Lokal

Buka file `index.html` di browser web Anda untuk melihat website.

## Cara Deploy ke GitHub Pages

1. Buat repository baru di GitHub (pastikan repositorynya publik)
2. Push kode ini ke repository tersebut
3. Di halaman repository GitHub Anda, klik pada tab "Settings"
4. Scroll ke bawah, cari bagian "GitHub Pages" di sidebar kiri
5. Di bagian "Source", pilih "GitHub Actions"
6. Kembali ke tab "Actions" di repository Anda
7. Pilih workflow "Deploy to GitHub Pages" (atau "Deploy static content to Pages")
8. Klik tombol "Run workflow" pada workflow yang dipilih
9. Tunggu hingga workflow selesai (tanda centang hijau)
10. Kembali ke Settings > Pages untuk melihat URL website yang sudah di-deploy

### Catatan Tentang Workflow

Repository ini memiliki dua file workflow yang dapat digunakan:

- `.github/workflows/static.yml` - Workflow utama dengan konfigurasi manual
- `.github/workflows/pages.yml` - Workflow alternatif yang lebih sederhana

Jika satu workflow tidak berfungsi, coba gunakan workflow yang lain dengan klik pada tab "Actions" dan memilih workflow yang berbeda.

### Membuat Personal Access Token (Jika Diperlukan)

Jika masih ada error "Resource not accessible by integration":

1. Buka [GitHub Personal Access Tokens](https://github.com/settings/tokens)
2. Klik "Generate new token" > "Generate new token (classic)"
3. Beri nama token (misalnya "GitHub Pages Deploy")
4. Pilih scope: `repo`, `workflow`, dan `admin:org`
5. Klik "Generate token" dan salin token yang dihasilkan
6. Kembali ke repositori Anda, klik Settings > Secrets and variables > Actions
7. Klik "New repository secret"
8. Tambahkan secret dengan nama `PAT_GITHUB_TOKEN` dan paste token Anda
9. Edit file `.github/workflows/static.yml` dan ganti `secrets.GITHUB_TOKEN` dengan `secrets.PAT_GITHUB_TOKEN`

### Troubleshooting Deployment

Jika terjadi error saat deployment:

1. Pastikan repository Anda berstatus publik (bukan private)
2. Pastikan branch utama bernama "main" (bukan "master" atau lainnya)
3. Pastikan GitHub Pages sudah diaktifkan di repository settings
4. Coba aktifkan GitHub Pages secara manual di Settings > Pages, pilih branch "gh-pages" (akan dibuat oleh workflow)
5. Jika masih terjadi error, baca pesan error di tab Actions untuk informasi lebih lanjut

## URL GitHub Pages

Setelah di-deploy, website Anda akan tersedia di URL:
`https://[username].github.io/[repo-name]/`

## Custom Domain (Opsional)

Jika Anda ingin menggunakan domain kustom:

1. Edit file CNAME dan ganti dengan domain Anda
2. Atur DNS domain Anda untuk mengarah ke GitHub Pages
3. Di Settings > Pages, masukkan custom domain Anda

## Fitur

- Responsif untuk semua ukuran perangkat (mobile, tablet, desktop)
- Navigasi yang mudah
- Informasi lengkap tentang produk susu kambing
- Testimoni pelanggan
- Footer dengan link sosial media
