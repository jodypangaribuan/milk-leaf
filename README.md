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

1. Fork repository ini ke akun GitHub Anda
2. Pastikan repository Anda publik
3. Pergi ke Settings > Pages
4. Di bagian "Build and deployment", pilih "GitHub Actions" sebagai Source
5. GitHub Actions akan otomatis men-deploy website Anda setiap kali ada perubahan di branch main

## URL GitHub Pages

Setelah di-deploy, website Anda akan tersedia di URL:
`https://[username].github.io/milk-leaf/`

## Fitur

- Responsif untuk semua ukuran perangkat (mobile, tablet, desktop)
- Navigasi yang mudah
- Informasi lengkap tentang produk susu kambing
- Testimoni pelanggan
- Footer dengan link sosial media
