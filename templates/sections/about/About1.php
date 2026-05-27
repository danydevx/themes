<?php /* === ABOUT === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <img class="tb-about__img"
             src="<?= esc($data['img'] ?? placeholder('800x600', 'faf8f5', 'b87c4c', 'Terraza+Balcones+Jardín')) ?>"
             alt="<?= esc($data['img_alt'] ?? 'Vista del jardín') ?>">
      </div>
      <div class="col-lg-6">
        <?php foreach ($data['benefits'] ?? [] as $b): ?>
          <div class="tb-about__benefit">
            <i class="bi <?= esc($b['icon'] ?? 'bi-check-circle-fill') ?>"></i>
            <div>
              <h5><?= esc($b['title'] ?? '') ?></h5>
              <p><?= esc($b['text'] ?? '') ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
