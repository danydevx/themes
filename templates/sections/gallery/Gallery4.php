<?php /* === GALLERY FULL-WIDTH HORIZONTAL SCROLL === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section tb-gallery tb-gallery--4 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
  </div>

  <div class="tb-gallery--4__track d-flex gap-3 overflow-auto pb-3">
    <?php foreach ($d['images'] ?? [] as $img): ?>
      <div class="tb-gallery--4__cell flex-shrink-0">
        <a class="tb-gallery__slide tb-gallery-lightbox d-block rounded-4 overflow-hidden"
           href="<?= esc($img['full'] ?? placeholder('900x900', '0f172a', '3b82f6', $img['alt'] ?? '')) ?>">
          <img src="<?= esc($img['thumb'] ?? placeholder('600x600', '0f172a', '3b82f6', $img['alt'] ?? '')) ?>"
               alt="<?= esc($img['alt'] ?? '') ?>" loading="lazy" class="tb-gallery--4__image">
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
