# Portofolio Mohammad Ariq Baihaqi (PHP native)

Situs portofolio satu halaman. PHP 8.1+ tanpa framework dan tanpa database.

## Menjalankan di komputer sendiri

```bash
php -S localhost:8000
```

Buka http://localhost:8000. Tanpa koneksi internet, font Google tidak termuat dan tampilan memakai font cadangan sistem.

## Mengubah isi

- **Teks, pengalaman, proyek, keahlian:** edit `data/profile.php`.
- **Kalimat pembuka di hero:** tambahkan kunci `'intro'` di dalam `'person'` pada `data/profile.php`. Tanpa kunci itu, hero memakai kalimat bawaan.
- **Tautan GitHub dan LinkedIn:** isi bagian `links` di `data/profile.php`. Yang kosong tidak ditampilkan.
- **URL situs (untuk Open Graph):** isi `site_url` di `config.php`.
- **File CV:** ganti `assets/files/CV_Mohammad_Ariq_Baihaqi.docx`, atau ubah `cv_file` di `data/profile.php`.

## Struktur

```
index.php            halaman utama (merangkai partial)
api.php              endpoint JSON baca-saja, opsional. Halaman tidak memakainya, hapus bila tidak perlu
config.php           pengaturan
data/profile.php     seluruh isi portofolio
includes/            helper, head, foot
partials/            satu file per bagian halaman
assets/              css, js, file CV
storage/             penyimpanan lokal opsional
```

## Deploy dengan cPanel

Shared hosting dengan cPanel adalah pilihan paling sederhana karena proyek ini memakai PHP
native dan tidak membutuhkan database.

1. Pilih paket hosting yang mendukung PHP 8.1+ dan siapkan domain atau subdomain.
2. Di cPanel, buka **MultiPHP Manager** atau **Select PHP Version**, lalu pilih PHP 8.1
   atau yang lebih baru.
3. Aktifkan SSL/HTTPS melalui **SSL/TLS** atau **AutoSSL**.
4. Buka **File Manager**, masuk ke `public_html`, lalu unggah **isi** folder proyek ini.
   `index.php` harus berada langsung di `public_html` agar situs tampil di domain utama.
5. Pastikan file `.htaccess` ikut terunggah. File ini mengatur `index.php` sebagai halaman
   utama, menonaktifkan directory listing, dan melindungi file konfigurasi.
6. Edit `config.php` melalui File Manager dan isi `site_url` dengan URL HTTPS sebenarnya,
   misalnya `https://namadomain.com`, tanpa garis miring di akhir.
7. Buka domain di browser dan cek halaman utama, foto profil, CSS, JavaScript, serta
   tombol unduh CV.
8. Uji URL sensitif seperti `/config.php`, `/README.md`, `/data/`, `/includes/`,
   `/partials/`, dan `/storage/`. URL tersebut seharusnya ditolak atau tidak menampilkan
   isi folder.

Jika proyek ditempatkan di subfolder, misalnya `public_html/portofolio/`, situs diakses
melalui `https://namadomain.com/portofolio/`. Untuk domain utama, letakkan isi proyek
langsung di `public_html/`.

**Apache** sudah terlindungi lewat file `.htaccess` di tiap folder. **Nginx** tidak membaca `.htaccess`, jadi tambahkan aturan ini:

```nginx
location ~ ^/(data|includes|partials|storage)/ { deny all; }
location ~ ^/(config\.php|README\.md)$ { deny all; }
```

Folder `storage/` tetap dipertahankan sebagai folder terlindungi untuk kebutuhan pengembangan
berikutnya, meskipun versi saat ini tidak menyimpan pesan formulir.

## Keamanan yang sudah dipasang

Escape semua keluaran, perlindungan folder internal melalui `.htaccess`, serta header CSP,
`X-Frame-Options`, dan `nosniff`. Kalau menambah skrip atau gaya dari domain lain, perbarui
`security_headers()` di `includes/helpers.php`.
