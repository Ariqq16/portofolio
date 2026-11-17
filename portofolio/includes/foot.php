<?php /** @var array $data */ $p = $data['person']; ?>
<footer class="foot">
    <div class="wrap foot__in">
        <p>© <?= date('Y') ?> <?= e($p['name']) ?></p>
        <a class="foot__top" href="#atas" aria-label="Kembali ke atas">
            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
                <path d="M12 19V5m-6 6 6-6 6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</footer>
<script src="<?= asset('assets/js/app.js') ?>" defer></script>
</body>
</html>
