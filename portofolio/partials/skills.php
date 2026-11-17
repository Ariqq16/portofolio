<?php /** @var array $data */ ?>
<section class="sec sec--tint" id="keahlian">
    <div class="wrap">
        <h2 class="label">Keahlian teknis</h2>
        <div class="tables">
            <?php foreach ($data['skills'] as $group): ?>
                <article class="tbl">
                    <header class="tbl__head">
                        <span class="mono tbl__name"><?= e($group['table']) ?></span>
                    </header>
                    <h3 class="tbl__title"><?= e($group['title']) ?></h3>
                    <ul class="tbl__rows">
                        <?php foreach ($group['items'] as $i => $item): ?>
                            <li><span class="mono tbl__id"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span><?= e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
