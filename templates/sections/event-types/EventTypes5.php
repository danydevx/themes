<?php /* === EVENTTYPES5 ICON BACKGROUND CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section tb-event-types--5 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">

    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="col-md-6 col-lg-4">
          <div class="tb-event-types--5__card rounded-4 overflow-hidden h-100 position-relative" style="background:var(--section-surface); border:1px solid var(--section-border); min-height:280px">
            <!-- Icono grande como fondo -->
            <div class="position-absolute top-0 end-0 mt-3 me-3 opacity-15">
              <i class="bi <?= esc($item['icon'] ?? 'bi-balloon') ?>" style="font-size:6rem"></i>
            </div>
            <!-- Contenido -->
            <div class="p-4 position-relative" style="z-index:2">
              <div class="tb-event-types--5__icon-wrapper rounded-3 d-inline-flex align-items-center justify-content-center mb-3" style="width:56px; height:56px; background:var(--tb-primary); color:#fff">
                <i class="bi <?= esc($item['icon'] ?? 'bi-balloon') ?> fs-5"></i>
              </div>
              <h3 class="fw-bold mb-2" style="font-family:var(--tb-heading-font)"><?= esc($item['title'] ?? '') ?></h3>
              <p class="mb-0" style="color:var(--section-muted); font-size:0.9rem; line-height:1.6"><?= esc($item['text'] ?? '') ?></p>
              <?php if (!empty($item['price'])): ?>
                <div class="mt-3 pt-3 border-top" style="border-color:var(--section-border) !important">
                  <span class="fw-bold" style="color:var(--tb-primary)"><?= esc($item['price']) ?></span>
                  <?php if (!empty($item['price_note'])): ?>
                    <span class="small ms-1" style="color:var(--section-muted)"><?= esc($item['price_note']) ?></span>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($data['cta'])): ?>
      <div class="text-center mt-5">
        <a class="tb-btn tb-btn--outline" href="<?= esc($data['cta']['href'] ?? '#') ?>">
          <?= esc($data['cta']['label'] ?? 'Ver todos los eventos') ?> <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    <?php endif; ?>

  </div>
</section>