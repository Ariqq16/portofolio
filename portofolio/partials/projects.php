<?php
/** @var array $data */
?>
<section class="sec sec--tint" id="proyek">
    <div class="wrap">
        <h2 class="label">Proyek PBL</h2>
        <div class="cases">
            <?php foreach ($data['projects'] as $proj): ?>
                <article class="case" id="proyek-<?= e($proj['slug']) ?>">
                    <div class="case__body">
                        <p class="case__meta mono"><?= e($proj['role']) ?> · <?= e($proj['period']) ?></p>
                        <h3 class="case__title"><?= brand($proj['title']) ?></h3>
                        <p class="case__tag"><?= e($proj['tagline']) ?></p>
                        <dl class="case__dl">
                            <dt>Masalah</dt><dd><?= e($proj['problem']) ?></dd>
                            <dt>Cakupan</dt><dd><?= e($proj['scope']) ?></dd>
                            <?php if ($proj['stack']): ?>
                                <dt>Teknologi</dt>
                                <dd>
                                    <ul class="tags">
                                        <?php foreach ($proj['stack'] as $t): ?><li class="tag mono"><?= e($t) ?></li><?php endforeach; ?>
                                    </ul>
                                </dd>
                            <?php endif; ?>
                        </dl>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
