<?php /* === TESTIMONIALS CHAT / MESSAGE STYLE === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-testimonials <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="swiper tb-testimonials__swiper">
          <div class="swiper-wrapper">
            <?php foreach ($data['items'] ?? [] as $t): ?>
              <div class="swiper-slide">
                <div class="d-flex flex-column gap-3" style="max-width:640px; margin:0 auto">
                  <div class="d-flex gap-3 align-items-start">
                    <div class="flex-shrink-0 rounded-circle overflow-hidden" style="width:56px; height:56px; border:3px solid var(--tb-primary)">
                      <img src="<?= esc($t['avatar'] ?? placeholder('100x100', 'b87c4c', 'fff', substr(($t['author'] ?? 'C'), 0, 1))) ?>"
                           alt="<?= esc($t['author'] ?? '') ?>" class="w-100 h-100" style="object-fit:cover" loading="lazy">
                    </div>
                    <div class="rounded-4 p-4" style="background:var(--section-surface); border-top-left-radius:4px; max-width:500px">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <strong><?= esc($t['author'] ?? '') ?></strong>
                        <span class="small" style="color:var(--section-muted)"><?= esc($t['date'] ?? '') ?></span>
                      </div>
                      <div class="mb-2">
                        <?php for ($s = 0; $s < ($t['stars'] ?? 5); $s++): ?>
                          <i class="bi bi-star-fill small" style="color:#fbbc04"></i>
                        <?php endfor; ?>
                      </div>
                      <p class="mb-0" style="color:var(--section-text); line-height:1.7"><?= esc($t['text'] ?? '') ?></p>
                    </div>
                  </div>
                  <?php if (!empty($t['event'])): ?>
                    <div class="ms-auto me-0 px-3 py-1 rounded-pill small" style="background:rgba(var(--tb-primary-rgb),.1); color:var(--tb-primary); max-width:fit-content">
                      <?= esc($t['event']) ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="tb-testimonials__pagination swiper-pagination mt-4"></div>
        </div>
      </div>
    </div>
  </div>
</section>
