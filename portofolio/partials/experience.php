<?php /** @var array $data */ ?>
<section class="sec" id="pengalaman">
    <div class="wrap">
        <h2 class="label">Pengalaman</h2>
        <div class="jobs">
            <?php foreach ($data['experience'] as $job): ?>
                <article class="job">
                    <div class="job__when">
                        <span class="mono"><?= e($job['period']) ?></span>
                        <?php if ($job['current']): ?><span class="now mono">Sekarang</span><?php endif; ?>
                    </div>
                    <div class="job__main">
                        <h3 class="job__role"><?= e($job['role']) ?><span class="job__ctx"><?= brand($job['context']) ?></span></h3>
                        <p class="job__org"><?= e($job['org']) ?></p>
                        <ul class="job__points">
                            <?php foreach ($job['points'] as $point): ?>
                                <li><?= e($point) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
