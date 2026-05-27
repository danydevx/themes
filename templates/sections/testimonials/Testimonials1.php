<?php /* === TESTIMONIALS === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-testimonials <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
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
            <div class="tb-testimonial__card">
              <div class="tb-testimonial__stars">
                <?php for ($i = 0; $i < ($t['stars'] ?? 5); $i++): ?>
                  <i class="bi bi-star-fill"></i>
                <?php endfor; ?>
              </div>
              <p class="tb-testimonial__text"><?= esc($t['text'] ?? '') ?></p>
              <p class="tb-testimonial__author"><?= esc($t['author'] ?? '') ?></p>
              <p class="tb-testimonial__event"><?= esc($t['event'] ?? '') ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="tb-testimonials__pagination swiper-pagination"></div>
    </div>
  </div>
</section>
