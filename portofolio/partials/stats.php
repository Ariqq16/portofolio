<?php /** @var array $data */ ?>
<section class="stats" aria-label="Ringkasan angka">
    <dl class="wrap stats__in">
        <?php foreach ($data['stats'] as $s): ?>
            <div class="stat">
                <dt class="stat__v"><?= e($s['value']) ?></dt>
                <dd class="stat__l"><?= e($s['label']) ?></dd>
            </div>
        <?php endforeach; ?>
    </dl>
</section>
