<?php /* === HERO WITH FLOATING CARD === */ ?>
<?php $d = section_defaults($data); ?>
<?php $bg = $d['bg'] ?: placeholder('1920x1080', '0f172a', '3b82f6', 'Hero'); ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--5 d-flex align-items-end pb-5 <?= esc($d['scheme']) ?>" style="background-image: url('<?= esc($bg) ?>');" <?= anim_attrs($d) ?>>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="tb-hero--5__card rounded-4 p-4 p-lg-5">
          <?php if (!empty($d['badge'])): ?>
            <span class="tb-hero--5__badge badge rounded-pill px-3 py-2 mb-3 fw-semibold">
              <?= esc($d['badge']) ?>
            </span>
          <?php endif; ?>

          <h1 class="tb-hero__title display-2 fw-bold"><?= $d['title'] ?? 'Terraza Buenavista' ?></h1>

          <?php if (!empty($d['text'])): ?>
            <p class="tb-hero__text"><?= esc($d['text']) ?></p>
          <?php endif; ?>

          <?php if (!empty($d['features'])): ?>
            <div class="tb-hero--5__features d-flex flex-wrap gap-3 mb-3">
              <?php foreach ($d['features'] as $feat): ?>
                <span class="tb-hero--5__feature d-flex align-items-center gap-2 small">
                  <i class="tb-hero--5__feature-icon bi <?= esc($feat['icon'] ?? 'bi-check-circle-fill') ?>"></i>
                  <?= esc($feat['label'] ?? '') ?>
                </span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="d-flex flex-wrap gap-3 mt-2">
            <?php if (!empty($d['cta_primary'])): ?>
              <a class="tb-btn tb-btn--primary tb-btn--lg" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>">
                <i class="bi bi-whatsapp"></i> <?= esc($d['cta_primary']['label'] ?? 'Reservar') ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($d['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg tb-hero--5__cta-secondary" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
                <i class="bi bi-play-circle"></i> <?= esc($d['cta_secondary']['label'] ?? 'Ver más') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
