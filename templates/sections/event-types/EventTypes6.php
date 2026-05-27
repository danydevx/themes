<?php /* === EVENTTYPES6 HORIZONTAL SCROLL CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section tb-event-types--6 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
  </div>

  <!-- Horizontal scroll cards -->
  <div class="tb-event-types--6__scroll-wrapper overflow-hidden">
    <div class="tb-event-types--6__track d-flex gap-4 px-4 pb-4" style="overflow-x:auto; scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; padding-bottom:1rem">

      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="tb-event-types--6__card flex-shrink-0 rounded-4 p-4" style="width:300px; scroll-snap-align:start; background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="text-center mb-3">
            <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" style="width:64px; height:64px; background:rgba(var(--tb-primary-rgb),0.12); color:var(--tb-primary)">
              <i class="bi <?= esc($item['icon'] ?? 'bi-star') ?> fs-3"></i>
            </div>
            <h3 class="mb-2" style="font-size:1.1rem; font-weight:700"><?= esc($item['title'] ?? '') ?></h3>
            <p class="small mb-3" style="color:var(--section-muted); line-height:1.5"><?= esc($item['text'] ?? '') ?></p>
            <?php if (!empty($item['price'])): ?>
              <div class="mt-auto">
                <span class="badge" style="background:var(--tb-primary); color:#fff; font-size:0.8rem; padding:0.4rem 0.8rem"><?= esc($item['price']) ?></span>
                <?php if (!empty($item['price_note'])): ?>
                  <span class="small ms-1" style="color:var(--section-muted)"><?= esc($item['price_note']) ?></span>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <?php if (!empty($data['cta'])): ?>
    <div class="container mt-4 text-center">
      <a href="<?= esc($data['cta']['href'] ?? '#') ?>" class="tb-btn tb-btn--primary">
        <?= esc($data['cta']['label'] ?? 'Ver más') ?>
      </a>
    </div>
  <?php endif; ?>
</section>