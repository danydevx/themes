<?php /* === FAQ4 TWO COLUMN ACCORDION === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'faq') ?>" class="tb-section tb-faq--4 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <?php $items = $d['items'] ?? []; $half = ceil(count($items) / 2); ?>
        <?php foreach (array_slice($items, 0, $half) as $item): ?>
          <div class="accordion-item tb-faq--4__item mb-3">
            <h3 class="accordion-header">
              <?php $id = 'faq4-' . substr(md5(($item['q'] ?? '') . '-L'), 0, 10); ?>
              <button class="accordion-button tb-faq--4__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= esc($id) ?>">
                <i class="bi <?= esc($item['icon'] ?? 'bi-question-circle') ?> me-2 tb-faq--4__icon"></i>
                <?= esc($item['q'] ?? '') ?>
              </button>
            </h3>
            <div id="<?= esc($id) ?>" class="accordion-collapse collapse">
              <div class="accordion-body tb-faq--4__answer">
                <?= esc($item['a'] ?? '') ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="col-lg-6">
        <?php foreach (array_slice($items, $half) as $item): ?>
          <div class="accordion-item tb-faq--4__item mb-3">
            <h3 class="accordion-header">
              <?php $id = 'faq4-' . substr(md5(($item['q'] ?? '') . '-R'), 0, 10); ?>
              <button class="accordion-button tb-faq--4__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= esc($id) ?>">
                <i class="bi <?= esc($item['icon'] ?? 'bi-question-circle') ?> me-2 tb-faq--4__icon"></i>
                <?= esc($item['q'] ?? '') ?>
              </button>
            </h3>
            <div id="<?= esc($id) ?>" class="accordion-collapse collapse">
              <div class="accordion-body tb-faq--4__answer">
                <?= esc($item['a'] ?? '') ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?php if (!empty($d['cta_text']) && !empty($d['cta_link'])): ?>
      <div class="text-center mt-5">
        <p class="mb-3"><?= esc($d['cta_text']) ?></p>
        <a href="<?= esc($d['cta_link']) ?>" class="tb-btn tb-btn--primary">
          <?= esc($d['cta_label'] ?? 'Contactar') ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
