<?php /* === FAQ5 LINEAR STEPS PANEL === */ ?>
<?php $d = section_defaults($data); ?>

<section id="<?= esc($d['id'] ?: 'faq') ?>" class="tb-section tb-faq tb-faq--5 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="tb-faq--5__grid">
      <?php $i = 0; foreach ($d['items'] ?? [] as $item): $i++; ?>
        <?php $id = 'faq5-' . substr(md5(($item['q'] ?? '') . '-' . $i), 0, 10); ?>
        <article class="tb-faq--5__card">
          <button class="tb-faq--5__trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= esc($id) ?>" aria-expanded="false" aria-controls="<?= esc($id) ?>">
            <span class="tb-faq--5__step"><?= esc((string)$i) ?></span>
            <span class="tb-faq--5__question"><?= esc($item['q'] ?? '') ?></span>
            <i class="bi bi-chevron-down tb-faq--5__chevron" aria-hidden="true"></i>
          </button>
          <div id="<?= esc($id) ?>" class="collapse">
            <div class="tb-faq--5__answer"><?= nl2br(esc($item['a'] ?? '')) ?></div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($d['cta_text']) && !empty($d['cta_link'])): ?>
      <div class="text-center mt-4">
        <p class="tb-faq--5__cta-text mb-3"><?= esc($d['cta_text']) ?></p>
        <a href="<?= esc($d['cta_link']) ?>" class="tb-btn tb-btn--whatsapp tb-btn--lg" target="_blank" rel="noopener">
          <i class="bi bi-whatsapp"></i> <?= esc($d['cta_label'] ?? 'Resolver por WhatsApp') ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
