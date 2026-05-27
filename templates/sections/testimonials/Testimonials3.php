<?php /* === TESTIMONIALS GOOGLE STYLE === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php if (!empty($data['rating_summary'])): ?>
      <div class="text-center mb-4">
        <div class="d-inline-flex align-items-center gap-3 px-4 py-3 rounded-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="tb-fs-price"><?= esc((string)($data['rating_summary']['score'] ?? '4.9')) ?></div>
          <div>
            <div class="mb-1">
              <?php for ($s = 0; $s < 5; $s++): ?>
                <i class="bi bi-star-fill" class="fs-6" style="color:#fbbc04"></i>
              <?php endfor; ?>
            </div>
            <p class="small mb-0" style="color:var(--section-muted)"><?= esc($data['rating_summary']['label'] ?? 'Basado en reseñas de Google') ?></p>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="row g-4">
      <?php foreach ($data['items'] ?? [] as $review): ?>
        <div class="col-md-6 col-lg-4">
          <div class="rounded-4 p-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <!-- header: avatar + name + date -->
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="rounded-circle overflow-hidden flex-shrink-0 tb-avatar-sm">
                <img src="<?= esc($review['avatar'] ?? placeholder('100x100', 'c9a96e', '1a1a1e', substr(($review['author'] ?? 'U'), 0, 1))) ?>"
                     alt="<?= esc($review['author'] ?? '') ?>" loading="lazy"
                     class="tb-avatar-sm">
              </div>
              <div class="flex-grow-1">
                <p class="fw-semibold mb-0 small"><?= esc($review['author'] ?? '') ?></p>
                <p class="small mb-0 tb-fs-badge" style="color:var(--section-muted)"><?= esc($review['date'] ?? '') ?></p>
              </div>
              <div class="flex-shrink-0">
                <img src="https://placehold.co/20x20/4285f4/ffffff?text=G" alt="Google" style="width:18px; height:18px; border-radius:50%;">
              </div>
            </div>

            <!-- stars -->
            <div class="mb-2">
              <?php for ($s = 0; $s < ($review['stars'] ?? 5); $s++): ?>
                <i class="bi bi-star-fill tb-fs-badge" style="color:#fbbc04"></i>
              <?php endfor; ?>
              <?php for ($s = ($review['stars'] ?? 5); $s < 5; $s++): ?>
                <i class="bi bi-star tb-fs-badge" style="color:#dadce0"></i>
              <?php endfor; ?>
            </div>

            <!-- review text -->
            <p class="small mb-0" style="color:var(--section-text); line-height:1.6"><?= esc($review['text'] ?? '') ?></p>

            <!-- owner reply -->
            <?php if (!empty($review['reply'])): ?>
              <div class="mt-3 p-3 rounded-3" style="background:rgba(var(--tb-primary-rgb),0.05)">
                <p class="fw-semibold mb-1 tb-fs-label" style="color:var(--tb-primary)">
                  <i class="bi bi-arrow-return-right me-1"></i> Respuesta del anfitrión
                </p>
                <p class="small mb-0" style="color:var(--section-muted)"><?= esc($review['reply']) ?></p>
              </div>
            <?php endif; ?>

            <!-- like button -->
            <div class="mt-3 pt-2 border-top" style="border-color:var(--section-border) !important">
              <span class="d-inline-flex align-items-center gap-1 small" style="color:var(--section-muted)">
                <i class="bi bi-hand-thumbs-up" style="color:var(--tb-primary)"></i>
                <span><?= rand(2, 15) ?></span>
              </span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($data['cta_text'])): ?>
      <div class="text-center mt-4">
        <?php if (!empty($data['cta_link'])): ?>
          <a class="tb-btn tb-btn--outline" href="<?= esc($data['cta_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-google"></i> <?= esc($data['cta_text']) ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
