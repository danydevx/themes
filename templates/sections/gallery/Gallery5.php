<?php /* === GALLERY CAROUSEL WITH THUMBNAIL NAVIGATION === */ ?>
<?php $d = section_defaults($data); ?>
<?php $galleryId = 'gallery' . ($d['id'] ?: '1'); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section tb-gallery tb-gallery--5 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="swiper tb-gallery__main rounded-4 overflow-hidden shadow-lg mb-3">
          <div class="swiper-wrapper">
            <?php foreach ($d['images'] ?? [] as $idx => $img): ?>
              <div class="swiper-slide">
                <a href="<?= esc($img['full'] ?? placeholder('1200x800')) ?>" class="tb-gallery__lightbox" data-gallery="<?= esc($galleryId) ?>">
                  <img src="<?= esc($img['full'] ?? placeholder('1200x800')) ?>"
                        alt="<?= esc($img['alt'] ?? '') ?>"
                        class="tb-gallery--5__main-image w-100" loading="<?= $idx < 2 ? 'eager' : 'lazy' ?>">
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-button-next tb-gallery__nav tb-gallery--5__nav"></div>
          <div class="swiper-button-prev tb-gallery__nav tb-gallery--5__nav"></div>
        </div>

        <div class="swiper tb-gallery__thumbs">
          <div class="swiper-wrapper">
            <?php foreach ($d['images'] ?? [] as $img): ?>
              <div class="swiper-slide tb-gallery--5__thumb-slide">
                <div class="tb-gallery--5__thumb-frame rounded-3 overflow-hidden border border-2 border-transparent">
                  <img src="<?= esc($img['thumb'] ?? $img['full'] ?? placeholder('200x120')) ?>"
                        alt="<?= esc($img['alt'] ?? '') ?>"
                        class="tb-gallery--5__thumb-image w-100" loading="lazy">
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
