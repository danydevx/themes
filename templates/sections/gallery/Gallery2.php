<?php /* === GALLERY MASONRY GRID === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-3">
      <?php $idx = 0; foreach ($data['images'] ?? [] as $img): $idx++; ?>
        <?php
          $hClass = ($idx % 3 === 0) ? 'col-sm-6 col-lg-4' : 'col-6 col-md-4';
        ?>
        <div class="<?= $hClass ?>">
          <a class="tb-gallery__slide tb-gallery-lightbox d-block"
             href="<?= esc($img['full'] ?? placeholder('900x900', '2c2416', 'b87c4c', $img['alt'] ?? '')) ?>">
            <img src="<?= esc($img['thumb'] ?? placeholder('600x600', '2c2416', 'b87c4c', $img['alt'] ?? '')) ?>"
                 alt="<?= esc($img['alt'] ?? '') ?>" loading="lazy"
                 style="width:100%; object-fit:cover; aspect-ratio:1/1;">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
