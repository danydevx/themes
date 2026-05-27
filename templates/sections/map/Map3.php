<?php /* === MAP WITH INLINE CONTACT === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-map <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row g-4">
      <div class="col-lg-7">
        <div class="rounded-4 overflow-hidden shadow-lg">
          <iframe
            class="tb-map__frame w-100"
            src="<?= esc($data['map_src'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14929.052536526394!2d-103.409631!3d20.653916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add9a9232fe3%3A0x4cf3ee4e3f8b5c6a!2sZapopan%2C%20Jal.!5e0!3m2!1ses!2smx!4v1700000000000') ?>"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?= esc($data['map_title'] ?? 'Ubicación') ?>"
            style="height:400px; border:0">
          </iframe>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="rounded-4 p-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <h4 class="fw-bold mb-3" style="font-family:var(--tb-heading-font)"><?= esc($data['form_title'] ?? '¿Quiere visitarnos?') ?></h4>
          <p class="small mb-3" style="color:var(--section-muted)"><?= esc($data['form_text'] ?? 'Agende una visita y conozca el espacio en persona.') ?></p>
          <form class="tb-form">
            <div class="d-grid gap-2">
              <input type="text" class="form-control" placeholder="Su nombre" style="border-radius:10px; padding:.7rem 1rem">
              <input type="tel" class="form-control" placeholder="Teléfono" style="border-radius:10px; padding:.7rem 1rem">
              <input type="date" class="form-control" style="border-radius:10px; padding:.7rem 1rem">
              <button type="submit" class="tb-btn tb-btn--primary w-100" style="border-radius:50px">
                <i class="bi bi-calendar-check"></i> <?= esc($data['btn_label'] ?? 'Agendar visita') ?>
              </button>
            </div>
          </form>
          <?php if (!empty($data['address_items'])): ?>
            <div class="mt-4 pt-3 border-top" style="border-color:var(--section-border) !important">
              <?php foreach ($data['address_items'] as $ai): ?>
                <div class="d-flex align-items-center gap-2 mb-2 small">
                  <i class="bi <?= esc($ai['icon'] ?? 'bi-check-circle') ?>" style="color:var(--tb-primary)"></i>
                  <span style="color:var(--section-muted)"><?= esc($ai['text'] ?? '') ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
