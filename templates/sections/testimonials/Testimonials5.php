<?php /* === TESTIMONIALS GRID QUOTE CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-testimonials <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($data['items'] ?? [] as $idx => $t): ?>
        <div class="col-md-6 col-lg-4">
          <div class="tb-testimonials__grid-card rounded-4 p-4 h-100 position-relative">
            <i class="tb-testimonials__quote-icon bi bi-quote position-absolute top-0 end-0 mt-3 me-3"></i>
            <p class="tb-testimonials__grid-text mb-3">"<?= esc($t['text'] ?? '') ?>"</p>
            <div class="tb-testimonials__grid-author d-flex align-items-center gap-3 pt-3 border-top">
              <div class="tb-testimonials__avatar rounded-circle overflow-hidden flex-shrink-0">
                <img src="<?= esc($t['avatar'] ?? placeholder('100x100', 'b87c4c', 'fff', substr(($t['author'] ?? 'C'), 0, 1))) ?>"
                     alt="<?= esc($t['author'] ?? '') ?>" class="w-100 h-100" loading="lazy">
              </div>
              <div>
                <p class="fw-semibold mb-0 small"><?= esc($t['author'] ?? '') ?></p>
                <p class="tb-testimonials__event mb-0 small"><?= esc($t['event'] ?? '') ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($data['cta_text'])): ?>
      <div class="text-center mt-5">
        <p class="tb-testimonials__cta small mb-3"><?= esc($data['cta_text']) ?></p>
        <?php if (!empty($data['cta_link'])): ?>
          <a class="tb-btn tb-btn--outline" href="<?= esc($data['cta_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-chat-quote"></i> <?= esc($data['cta_label'] ?? 'Ver más reseñas') ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
