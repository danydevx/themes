<?php /* === GALLERY FULL-WIDTH HORIZONTAL SCROLL === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
  </div>

  <div class="d-flex gap-3 overflow-auto pb-3" style="scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; padding-left:max(1rem, calc((100vw - 1140px)/2));">
    <?php foreach ($data['images'] ?? [] as $img): ?>
      <div class="flex-shrink-0" style="scroll-snap-align:start; width:clamp(280px,40vw,400px);">
        <a class="tb-gallery__slide tb-gallery-lightbox d-block rounded-4 overflow-hidden"
           href="<?= esc($img['full'] ?? placeholder('900x900', '0f172a', '3b82f6', $img['alt'] ?? '')) ?>">
          <img src="<?= esc($img['thumb'] ?? placeholder('600x600', '0f172a', '3b82f6', $img['alt'] ?? '')) ?>"
               alt="<?= esc($img['alt'] ?? '') ?>" loading="lazy"
               style="width:100%; aspect-ratio:4/3; object-fit:cover;">
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
