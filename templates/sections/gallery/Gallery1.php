<?php /* === GALLERY === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section tb-gallery <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="swiper tb-gallery__swiper">
      <div class="swiper-wrapper">
        <?php foreach ($data['images'] ?? [] as $img): ?>
          <div class="swiper-slide">
            <a class="tb-gallery__slide tb-gallery-lightbox"
               href="<?= esc($img['full'] ?? placeholder('1200x900', '2c2416', 'b87c4c', $img['alt'] ?? '')) ?>">
              <img src="<?= esc($img['thumb'] ?? placeholder('600x450', '2c2416', 'b87c4c', $img['alt'] ?? '')) ?>"
                   alt="<?= esc($img['alt'] ?? '') ?>">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="tb-gallery__pagination swiper-pagination"></div>
    </div>
  </div>
</section>
