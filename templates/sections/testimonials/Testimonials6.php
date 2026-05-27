<?php /* === TESTIMONIALS PULL QUOTE EDITORIAL === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-testimonials <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?>
        <span class="tb-section__label" style="font-style:italic; text-transform:none; letter-spacing:0"><?= esc($d['label']) ?></span>
      <?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="swiper tb-testimonials__swiper">
      <div class="swiper-wrapper">
        <?php foreach ($data['items'] ?? [] as $t): ?>
          <div class="swiper-slide">
            <div style="max-width:720px; margin:0 auto; padding:2rem 1rem">
              <div class="text-center">
                <span style="font-family:var(--tb-heading-font); font-size:6rem; line-height:.6; color:var(--tb-primary); opacity:.3; display:block; margin-bottom:1rem">&ldquo;</span>
                <p style="font-family:var(--tb-heading-font); font-size:clamp(1.1rem, 2.5vw, 1.5rem); font-style:italic; line-height:1.7; color:var(--section-text); max-width:600px; margin:0 auto 2rem">
                  <?= esc($t['text'] ?? '') ?>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-center gap-3">
                <?php if (!empty($t['avatar'])): ?>
                  <div class="rounded-circle overflow-hidden flex-shrink-0" style="width:52px; height:52px; border:2px solid var(--tb-primary)">
                    <img src="<?= esc($t['avatar']) ?>" alt="<?= esc($t['author'] ?? '') ?>" class="w-100 h-100" style="object-fit:cover" loading="lazy">
                  </div>
                <?php endif; ?>
                <div>
                  <p class="fw-bold mb-0 small"><?= esc($t['author'] ?? '') ?></p>
                  <p class="mb-0 small" style="color:var(--section-muted)"><?= esc($t['event'] ?? '') ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="tb-testimonials__pagination swiper-pagination mt-3"></div>
    </div>
  </div>
</section>
