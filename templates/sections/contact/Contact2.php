<?php /* === CONTACT FORM TWO COLUMNS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'contacto') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row g-5 align-items-start">
      <div class="col-lg-7">
        <form class="tb-form">
          <div class="row g-3">
            <?php foreach ($data['fields'] ?? [] as $field): ?>
              <div class="<?= esc($field['col'] ?? 'col-12') ?>">
                <label for="<?= esc($field['id']) ?>" class="form-label"><?= esc($field['label']) ?></label>
                <?php if (($field['type'] ?? 'text') === 'select'): ?>
                  <select class="form-select" id="<?= esc($field['id']) ?>">
                    <?php foreach ($field['options'] ?? [] as $opt): ?>
                      <option <?= !empty($opt['selected']) ? 'selected' : '' ?> <?= !empty($opt['disabled']) ? 'disabled' : '' ?>>
                        <?= esc($opt['label']) ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                <?php elseif (($field['type'] ?? 'text') === 'textarea'): ?>
                  <textarea class="form-control" id="<?= esc($field['id']) ?>" rows="<?= esc((string)($field['rows'] ?? 4)) ?>"
                            placeholder="<?= esc($field['placeholder'] ?? '') ?>"></textarea>
                <?php else: ?>
                  <input type="<?= esc($field['type'] ?? 'text') ?>" class="form-control" id="<?= esc($field['id']) ?>"
                         placeholder="<?= esc($field['placeholder'] ?? '') ?>"
                         <?= !empty($field['required']) ? 'required' : '' ?>>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
            <div class="col-12">
              <button type="submit" class="tb-btn tb-btn--primary tb-btn--lg w-100">
                <i class="bi bi-send-fill"></i> <?= esc($data['btn_label'] ?? 'Enviar solicitud') ?>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-5">
        <div class="rounded-4 p-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <h4 class="fw-bold mb-3" style="font-family:var(--tb-heading-font)"><?= esc($data['info_title'] ?? 'Información de contacto') ?></h4>
          <?php if (!empty($data['info_items'])): ?>
            <?php foreach ($data['info_items'] as $item): ?>
              <div class="d-flex gap-3 mb-3 pb-3 border-bottom" style="border-color:var(--section-border) !important">
                <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center" style="width:44px; height:44px; background:rgba(var(--tb-primary-rgb), .12); color:var(--tb-primary)">
                  <i class="bi <?= esc($item['icon'] ?? 'bi-geo-alt') ?> fs-5"></i>
                </div>
                <div>
                  <p class="fw-semibold mb-0 small"><?= esc($item['label'] ?? '') ?></p>
                  <p class="mb-0 small" style="color:var(--section-muted)"><?= esc($item['text'] ?? '') ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php if (!empty($data['info_image'])): ?>
            <img src="<?= esc($data['info_image']) ?>" alt="<?= esc($data['info_image_alt'] ?? 'Ubicación') ?>"
                 class="img-fluid rounded-3 mt-2 w-100" style="max-height:200px; object-fit:cover" loading="lazy">
          <?php endif; ?>
          <?php if (!empty($data['info_cta'])): ?>
            <a class="tb-btn tb-btn--whatsapp w-100 mt-3" href="<?= esc($data['info_cta']['href'] ?? '#') ?>" <?= !empty($data['info_cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
              <i class="bi bi-whatsapp"></i> <?= esc($data['info_cta']['label'] ?? 'WhatsApp') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
