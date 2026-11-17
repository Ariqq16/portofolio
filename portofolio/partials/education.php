<?php /** @var array $data */ ?>
<section class="sec" id="pendidikan">
    <div class="wrap">
        <h2 class="label">Pendidikan</h2>
        <ul class="edu">
            <?php foreach ($data['education'] as $row): ?>
                <li>
                    <p class="edu__n"><?= e($row['school']) ?> <span><?= e($row['program']) ?></span></p>
                    <p class="edu__d mono"><?= e($row['period']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
