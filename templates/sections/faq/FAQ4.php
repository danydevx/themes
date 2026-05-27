<?php /* === FAQ4 TWO COLUMN ACCORDION === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'faq') ?>" class="tb-section tb-faq--4 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <?php $items = $data['items'] ?? []; $half = ceil(count($items) / 2); ?>
        <?php foreach (array_slice($items, 0, $half) as $item): ?>
          <div class="accordion-item mb-3" style="background:var(--section-surface); border:1px solid var(--section-border)!important; border-radius:8px!important; overflow:hidden">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4-<?= md5($item['q'] ?? uniqid()) ?>" style="background:var(--section-surface); color:var(--section-text); font-weight:600; font-size:0.95rem; padding:1rem 1.25rem">
                <i class="bi <?= esc($item['icon'] ?? 'bi-question-circle') ?> me-2" style="color:var(--tb-primary)"></i>
                <?= esc($item['q'] ?? '') ?>
              </button>
            </h3>
            <div id="faq4-<?= md5($item['q'] ?? uniqid()) ?>" class="accordion-collapse collapse">
              <div class="accordion-body" style="background:var(--section-surface); color:var(--section-muted); padding:1rem 1.25rem 1.25rem 3rem; font-size:0.9rem; line-height:1.7">
                <?= esc($item['a'] ?? '') ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="col-lg-6">
        <?php foreach (array_slice($items, $half) as $item): ?>
          <div class="accordion-item mb-3" style="background:var(--section-surface); border:1px solid var(--section-border)!important; border-radius:8px!important; overflow:hidden">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4-<?= md5($item['q'] ?? uniqid()) ?>" style="background:var(--section-surface); color:var(--section-text); font-weight:600; font-size:0.95rem; padding:1rem 1.25rem">
                <i class="bi <?= esc($item['icon'] ?? 'bi-question-circle') ?> me-2" style="color:var(--tb-primary)"></i>
                <?= esc($item['q'] ?? '') ?>
              </button>
            </h3>
            <div id="faq4-<?= md5($item['q'] ?? uniqid()) ?>" class="accordion-collapse collapse">
              <div class="accordion-body" style="background:var(--section-surface); color:var(--section-muted); padding:1rem 1.25rem 1.25rem 3rem; font-size:0.9rem; line-height:1.7">
                <?= esc($item['a'] ?? '') ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?php if (!empty($data['cta_text']) && !empty($data['cta_link'])): ?>
      <div class="text-center mt-5">
        <p class="mb-3"><?= esc($data['cta_text']) ?></p>
        <a href="<?= esc($data['cta_link']) ?>" class="tb-btn tb-btn--primary">
          <?= esc($data['cta_label'] ?? 'Contactar') ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>