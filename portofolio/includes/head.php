<?php
/** @var array $data */
$p       = $data['person'];
$siteUrl = rtrim((string) config()['site_url'], '/');
$desc    = $p['name'] . ': ' . $p['role'] . '. Mahasiswa Teknik Informatika Politeknik Negeri Malang.';
?><!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($p['name']) ?> · <?= e($p['role']) ?></title>
    <meta name="description" content="<?= e($desc) ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($p['name']) ?>">
    <meta property="og:description" content="<?= e($desc) ?>">
    <?php if ($siteUrl !== ''): ?>
        <meta property="og:url" content="<?= e($siteUrl) ?>/">
        <link rel="canonical" href="<?= e($siteUrl) ?>/">
    <?php endif; ?>
    <meta name="color-scheme" content="light dark">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%234F62C9'/%3E%3Ctext x='16' y='22' font-family='monospace' font-size='15' font-weight='700' text-anchor='middle' fill='%23fff'%3EAB%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
    <script src="<?= asset('assets/js/theme.js') ?>"></script>
</head>
<body>
<a class="skip" href="#konten">Lewati ke konten</a>

<header class="bar">
    <div class="bar__in">
        <a class="mark" href="#atas" aria-label="Ke atas">
            <img src="<?= asset('assets/images/profile.jpeg') ?>" alt="Foto profil <?= e($p['name']) ?>" width="36" height="36">
        </a>
        <nav class="menu" aria-label="Navigasi utama">
            <a href="#profil">Profil</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#pengalaman">Pengalaman</a>
            <a href="#proyek">Proyek</a>
        </nav>
        <button class="theme" type="button" id="theme-toggle" aria-label="Ganti tema terang atau gelap">
            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M12 3a9 9 0 1 0 9 9c0-.5-.05-1-.14-1.47A6 6 0 0 1 12.47 3.14 9.2 9.2 0 0 0 12 3Z" fill="currentColor"/></svg>
        </button>
    </div>
</header>
