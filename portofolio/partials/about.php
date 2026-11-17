<?php /** @var array $data */ $p = $data['person']; ?>
<section class="sec" id="profil">
    <div class="wrap sec__grid">
        <div class="profile__aside">
            <h2 class="label">Profil</h2>
            <div class="profile__photo">
                <img src="<?= asset('assets/images/profile.jpeg') ?>" alt="Foto profil <?= e($p['name']) ?>" width="240" height="300" loading="lazy">
            </div>
        </div>
        <div>
            <p class="statement"><?= marked($data['summary']) ?></p>
            <dl class="facts">
                <div><dt>Lokasi</dt><dd><?= e($p['location']) ?></dd></div>
                <div><dt>Fokus</dt><dd>Backend, basis data, QA</dd></div>
            </dl>
        </div>
    </div>
</section>
