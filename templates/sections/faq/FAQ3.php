<?php /* === FAQ EXPANDABLE CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'faq') ?>" class="tb-section tb-faq tb-faq--3 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($d['items'] ?? [] as $item): ?>
        <div class="col-md-6">
          <div class="accordion-item border-0 mb-2">
            <h3 class="accordion-header">
              <button class="accordion-button tb-faq3__button collapsed d-flex align-items-center gap-3 rounded-4 p-4 shadow-sm"
                      type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq<?= esc(substr(md5($item['q'] ?? ''), 0, 8)) ?>"
                      aria-expanded="false"
                      aria-controls="faq<?= esc(substr(md5($item['q'] ?? ''), 0, 8)) ?>">
                <?php if (!empty($item['icon'])): ?>
                  <span class="tb-faq3__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                    <i class="bi <?= esc($item['icon']) ?> fs-5"></i>
                  </span>
                <?php endif; ?>
                <span class="fw-semibold flex-grow-1"><?= esc($item['q'] ?? '') ?></span>
              </button>
            </h3>
            <div id="faq<?= esc(substr(md5($item['q'] ?? ''), 0, 8)) ?>" class="accordion-collapse collapse">
              <div class="px-4 pb-4 pt-0 mt-2">
                <p class="tb-faq3__answer mb-0 small"><?= nl2br(esc($item['a'] ?? '')) ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($d['cta_text'])): ?>
      <div class="text-center mt-5">
        <p class="tb-faq3__cta mb-3"><?= esc($d['cta_text']) ?></p>
        <?php if (!empty($d['cta_link'])): ?>
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['cta_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($d['cta_label'] ?? 'Consultar') ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
