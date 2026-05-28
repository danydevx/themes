<?php /* === ABOUT8 STORYBOARD STRIPS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about tb-about--8 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="tb-about--8__board row g-4 g-xl-5 align-items-stretch">
      <div class="col-lg-5">
        <div class="tb-about--8__media h-100">
          <img src="<?= esc($d['img'] ?? placeholder('900x1100', '3a5a40', 'dad7cd', 'About8+Oblatos')) ?>"
               alt="<?= esc($d['img_alt'] ?? 'Vista del espacio') ?>"
               class="tb-about--8__img w-100 h-100" loading="lazy">
          <div class="tb-about--8__media-overlay"></div>
          <?php if (!empty($d['img_badge'])): ?>
            <span class="tb-about--8__img-badge"><?= esc($d['img_badge']) ?></span>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-7">
        <ul class="tb-about--8__strips list-unstyled mb-0">
          <?php foreach ($d['items'] ?? [] as $item): ?>
            <li class="tb-about--8__strip d-flex align-items-start p-3 p-md-4 rounded-4 border my-3">
              <span class="tb-about--8__icon m-3" aria-hidden="true">
                <i class="bi <?= esc($item['icon'] ?? 'bi-check2-circle') ?>"></i>
              </span>
              <div class="tb-about--8__content flex-grow-2">
                <h3 class="tb-about--8__title mb-1"><?= esc($item['title'] ?? '') ?></h3>
                <p class="tb-about--8__text mb-0"><?= esc($item['text'] ?? '') ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>

        <?php if (!empty($d['stats'])): ?>
          <div class="tb-about--8__stats row g-3 mt-2">
            <?php foreach ($d['stats'] as $s): ?>
              <div class="col-6 col-md-3">
                <div class="tb-about--8__stat text-center p-3 rounded-4 border h-100">
                  <div class="tb-about--8__stat-number"><?= esc($s['number'] ?? '') ?></div>
                  <div class="tb-about--8__stat-label"><?= esc($s['label'] ?? '') ?></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($d['cta'])): ?>
          <div class="mt-4">
            <a href="<?= esc($d['cta']['href'] ?? '#') ?>" class="tb-btn tb-btn--primary">
              <?= esc($d['cta']['label'] ?? 'Conocer más') ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
