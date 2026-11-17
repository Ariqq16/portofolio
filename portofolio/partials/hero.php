<?php
/** @var array $data */
$p = $data['person'];
$parts  = explode(' ', $p['name']);
$last   = array_pop($parts);
$lineA  = implode(' ', $parts);
$intro  = $p['intro'] ?? 'Mahasiswa Teknik Informatika Politeknik Negeri Malang. Saya mengerjakan backend, basis data, dan pengujian perangkat lunak.';
?>
<section class="hero" id="atas">
    <div class="wrap hero__in">
        <h1 class="name" aria-label="<?= e($p['name']) ?>">
            <span class="name__l"><?= e($lineA) ?></span>
            <span class="name__l"><?= e($last) ?></span>
        </h1>
        <p class="role mono"><?= e($p['role']) ?></p>
        <p class="intro"><?= e($intro) ?></p>
        <div class="cta">
            <a class="btn btn--solid" href="#proyek">Lihat proyek</a>
            <?php if (is_file(BASE_PATH . '/' . $p['cv_file'])): ?>
                <a class="btn btn--line" href="<?= e($p['cv_file']) ?>" download>Unduh CV</a>
            <?php endif; ?>
        </div>
    </div>
</section>
