<?php /* === GALLERY7 STAGGERED MASONRY === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section tb-gallery--7 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
  </div>

  <!-- Staggered masonry grid -->
  <div class="container-fluid px-4">
    <div class="tb-gallery--7__grid">

      <?php foreach (($data['images'] ?? []) as $i => $img): ?>
        <div class="tb-gallery--7__item <?= $i % 5 === 0 ? 'tb-gallery--7__item--tall' : '' ?> rounded-4 overflow-hidden position-relative" style="aspect-ratio:<?= $i % 5 === 0 ? '2/3' : '4/3' ?>">
          <img src="<?= esc($img['thumb'] ?? $img['full'] ?? '') ?>" alt="<?= esc($img['alt'] ?? 'Galería') ?>" class="w-100 h-100" style="object-fit:cover; transition:transform 0.4s ease">
          <div class="tb-gallery--7__overlay position-absolute inset-0 d-flex align-items-end p-3">
            <span class="small text-white fw-500"><?= esc($img['alt'] ?? '') ?></span>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <?php if (!empty($data['cta_text']) && !empty($data['cta_link'])): ?>
    <div class="container text-center mt-5">
      <a href="<?= esc($data['cta_link']) ?>" class="tb-btn tb-btn--outline">
        <?= esc($data['cta_text']) ?>
      </a>
    </div>
  <?php endif; ?>
</section>