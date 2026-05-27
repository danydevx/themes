<?php /* === TESTIMONIALS QUOTE STYLE === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="swiper tb-testimonials__swiper">
      <div class="swiper-wrapper">
        <?php foreach ($data['items'] ?? [] as $t): ?>
          <div class="swiper-slide">
            <div style="max-width:680px; margin:0 auto; text-align:center; padding:2rem">
              <i class="bi bi-quote display-3 d-block mb-3" style="color:var(--tb-primary); opacity:.4; line-height:1"></i>
              <p class="tb-fs-quote" style="font-family:var(--tb-heading-font); font-style:italic; line-height:1.6; color:var(--section-text)"><?= esc($t['text'] ?? '') ?></p>
              <div class="tb-divider"></div>
              <p class="fw-bold mb-0"><?= esc($t['author'] ?? '') ?></p>
              <p class="small" style="color:var(--section-muted)"><?= esc($t['event'] ?? '') ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="tb-testimonials__pagination swiper-pagination"></div>
    </div>
  </div>
</section>
