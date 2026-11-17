<?php
declare(strict_types=1);

require __DIR__ . '/includes/helpers.php';

date_default_timezone_set(config()['timezone']);
security_headers();

$data  = profile();

require __DIR__ . '/includes/head.php';
?>
<main id="konten">
<?php
require __DIR__ . '/partials/hero.php';
require __DIR__ . '/partials/stats.php';
require __DIR__ . '/partials/about.php';
require __DIR__ . '/partials/skills.php';
require __DIR__ . '/partials/experience.php';
require __DIR__ . '/partials/projects.php';
require __DIR__ . '/partials/education.php';
?>
</main>
<?php require __DIR__ . '/includes/foot.php'; ?>
