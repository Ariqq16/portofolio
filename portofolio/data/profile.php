<?php
declare(strict_types=1);

/**
 * Semua isi portofolio ada di file ini.
 * Ubah teks di sini, lalu muat ulang halaman. Tidak perlu menyentuh template.
 * File yang sama juga dipakai oleh api.php sebagai sumber data JSON.
 */
return [
    'person' => [
        'name'     => 'Mohammad Ariq Baihaqi',
        'initials' => 'AB',
        'role'     => 'Backend · Basis Data · QA',
        'location' => 'Malang, Jawa Timur',
        'email'    => 'ariqbaihaqi011@gmail.com',
        'phone'    => '+62 896-8694-1412',
        'cv_file'  => 'assets/files/CV_Mohammad_Ariq_Baihaqi.docx',
        // Isi bila sudah ada, kosongkan bila belum. Tautan kosong tidak ditampilkan.
        'links'    => [
            'github'   => '',
            'linkedin' => '',
        ],
    ],

    'summary' => 'Mahasiswa Teknik Informatika Politeknik Negeri Malang yang berfokus pada '
        . 'backend, basis data, dan Quality Assurance. Saya memimpin dua proyek PBL sebagai '
        . 'Project Manager dan menjadi QA pada proyek aplikasi mobile deteksi bahasa isyarat.',

    'stats' => [
        ['value' => '3',    'label' => 'proyek PBL'],
        ['value' => '2',    'label' => 'kali Project Manager'],
        ['value' => '1',    'label' => 'peran QA'],
        ['value' => '2023', 'label' => 'praktik kerja industri'],
    ],

    'skills' => [
        ['table' => 'bahasa_pemrograman', 'title' => 'Bahasa pemrograman', 'items' => ['PHP', 'JavaScript']],
        ['table' => 'backend',            'title' => 'Backend dan framework', 'items' => ['Laravel', 'REST API']],
        ['table' => 'basis_data',         'title' => 'Basis data',            'items' => ['MySQL', 'PostgreSQL']],
        ['table' => 'data_ml',            'title' => 'Data dan machine learning', 'items' => ['Jupyter Notebook', 'Pengolahan data', 'Pemodelan']],
        ['table' => 'lainnya',            'title' => 'Lainnya',               'items' => ['Quality Assurance (QA)', 'Manajemen proyek']],
    ],

    'experience' => [
        [
            'role'    => 'Quality Assurance',
            'context' => 'PBL BicaraIsyarat App',
            'org'     => 'Politeknik Negeri Malang',
            'period'  => 'Agu 2026 – sekarang',
            'current' => true,
            'points'  => [
                'Menyusun dan memverifikasi skenario pengujian berdasarkan kebutuhan fungsional dan non-fungsional pada SKPL aplikasi mobile deteksi bahasa isyarat (ASL).',
                'Menguji alur deteksi melalui kamera dan foto galeri, termasuk penanganan izin kamera ditolak dan gambar tanpa tangan terdeteksi.',
                'Memvalidasi target non-fungsional, seperti akurasi model minimal 85%, inferensi offline, dan penyimpanan riwayat deteksi lokal (SQLite).',
                'Mendokumentasikan hasil pengujian dan melaporkan temuan kepada tim pengembang.',
            ],
        ],
        [
            'role'    => 'Project Manager',
            'context' => 'PBL AI Clipper',
            'org'     => 'Politeknik Negeri Malang',
            'period'  => 'Feb 2026 – Jun 2026',
            'current' => false,
            'points'  => [
                'Memimpin tim lima orang dalam perancangan Marketplace Manajemen dan Monetisasi Video Clipper Berbasis AI yang mempertemukan content creator dan clipper, dengan fitur campaign, wallet, dan escrow.',
                'Menggali kebutuhan pengguna melalui wawancara, observasi, survei, dan analisis dokumen, lalu mengoordinasikan penyusunan SKPL.',
                'Mengoordinasikan perancangan backend berbasis Laravel, integrasi payment gateway, dan sistem escrow untuk pembagian komisi yang transparan.',
                'Mengoordinasikan perancangan fitur AI Auto Clipper untuk mendeteksi bagian penting video secara otomatis.',
            ],
        ],
        [
            'role'    => 'Project Manager',
            'context' => 'PBL Lab Data Technologies',
            'org'     => 'Politeknik Negeri Malang',
            'period'  => 'Agu 2025 – Des 2025',
            'current' => false,
            'points'  => [
                'Memimpin tim dalam pengembangan website laboratorium, mulai dari analisis kebutuhan pengguna hingga pelaksanaan pengembangan.',
                'Menerjemahkan user requirement menjadi fitur: profil laboratorium, fasilitas, penelitian dan publikasi, berita, galeri, dan kontak.',
                'Merancang pengelolaan hak akses berbasis peran (admin dan editor) untuk menambah, mengubah, dan menghapus data anggota serta konten.',
                'Mengoordinasikan pembagian tugas dan pemantauan progres tim.',
            ],
        ],
        [
            'role'    => 'Praktik Kerja Industri',
            'context' => 'CV. Agrindo Cipta Mandiri (EraBisnis)',
            'org'     => 'Perusahaan digital marketing dan web development',
            'period'  => '2023',
            'current' => false,
            'points'  => [
                'Mempelajari pembuatan situs web statis dengan Hugo dan penulisan konten menggunakan Markdown.',
                'Membuat dan menerbitkan artikel di Blogspot serta membangun backlink untuk mendukung SEO.',
                'Melakukan mining data untuk mengekstraksi informasi dari kumpulan data.',
            ],
        ],
    ],

    'projects' => [
        [
            'slug'    => 'ai-clipper',
            'title'   => 'AI Clipper',
            'tagline' => 'Marketplace manajemen dan monetisasi video clipper',
            'role'    => 'Project Manager',
            'period'  => 'Feb – Jun 2026',
            'problem' => 'Komisi clipper masih dihitung manual lewat spreadsheet dan chat, dan mencari bagian video yang berpotensi viral memakan waktu.',
            'scope'   => 'Campaign, wallet (deposit dan withdraw), escrow, payment gateway, AI Auto Clipper, dan dashboard performa video.',
            'stack'   => ['Laravel', 'Inertia.js', 'FFmpeg', 'Payment gateway'],
        ],
        [
            'slug'    => 'lab-data-technologies',
            'title'   => 'Lab Data Technologies',
            'tagline' => 'Website profil laboratorium',
            'role'    => 'Project Manager',
            'period'  => 'Agu – Des 2025',
            'problem' => 'Laboratorium membutuhkan satu website untuk profil, fasilitas, penelitian, publikasi, berita, dan galeri, plus halaman kontak untuk kerja sama.',
            'scope'   => 'Akses admin dan editor, penambahan dan penghapusan anggota (misalnya dosen yang pindah lab), serta dokumentasi 5–6 fasilitas.',
            'stack'   => [],
        ],
        [
            'slug'    => 'bicaraisyarat',
            'title'   => 'BicaraIsyarat App',
            'tagline' => 'Deteksi huruf ASL di ponsel, tanpa internet',
            'role'    => 'Quality Assurance',
            'period'  => 'Agu 2026 – sekarang',
            'problem' => 'Mengenali 24 huruf ASL statis (tanpa J dan Z) dari kamera atau galeri. Alurnya: deteksi tangan, crop dan resize ke 28×28 grayscale, klasifikasi, lalu simpan riwayat lokal.',
            'scope'   => 'SKPL memuat 14 kebutuhan fungsional dan 19 non-fungsional, termasuk KNF-AKUR-01: akurasi model minimal 85%.',
            'stack'   => ['Flutter', 'MediaPipe Hand Landmarker', 'TensorFlow Lite', 'SQLite'],
        ],
    ],

    'education' => [
        ['school' => 'Politeknik Negeri Malang', 'program' => 'Teknik Informatika',       'period' => '2024 – sekarang'],
        ['school' => 'SMKN 5 Malang',            'program' => 'Rekayasa Perangkat Lunak', 'period' => '2021 – 2024'],
    ],
];
