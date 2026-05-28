<?php /* === CTA7 TIMELINE BAR === */ ?>
<?php $d = section_defaults($data); ?>

<section class="tb-section tb-cta tb-cta--7 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-cta--7__wrap">
      <div class="tb-cta--7__content">
        <?php if (!empty($d['label'])): ?>
          <span class="tb-cta--7__label"><?= esc($d['label']) ?></span>
        <?php endif; ?>

        <h2 class="tb-cta--7__title"><?= esc($d['title'] ?? 'Reserve su fecha en tres pasos') ?></h2>

        <?php if (!empty($d['text'])): ?>
          <p class="tb-cta--7__text"><?= esc($d['text']) ?></p>
        <?php endif; ?>

        <div class="tb-cta--7__steps">
          <?php foreach ($d['steps'] ?? [] as $index => $step): ?>
            <div class="tb-cta--7__step">
              <span class="tb-cta--7__step-num"><?= esc((string)($index + 1)) ?></span>
              <span class="tb-cta--7__step-label"><?= esc($step['label'] ?? '') ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="tb-cta--7__actions">
        <?php if (!empty($d['wa_link'])): ?>
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['wa_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($d['btn_label'] ?? 'Enviar mensaje') ?>
          </a>
        <?php endif; ?>

        <?php if (!empty($d['secondary_link'])): ?>
          <a class="tb-btn tb-btn--outline tb-btn--lg" href="<?= esc($d['secondary_link']) ?>">
            <?= esc($d['secondary_label'] ?? 'Ver paquetes') ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
