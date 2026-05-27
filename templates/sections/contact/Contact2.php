<?php /* === CONTACT FORM TWO COLUMNS WITH SOCIAL === */ ?>
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
          <?php if (!empty($data['info_title'])): ?>
            <h4 class="fw-bold mb-4" style="font-family:var(--tb-heading-font)"><?= esc($data['info_title']) ?></h4>
          <?php endif; ?>

          <?php if (!empty($data['social'])): ?>
            <div class="<?= !empty($data['info_title']) ? 'pt-3 border-top' : '' ?>" style="<?= !empty($data['info_title']) ? 'border-color:var(--section-border) !important' : '' ?>">
              <p class="fw-bold mb-3" style="color:var(--tb-primary)">Síguenos en redes</p>
              <div class="d-flex flex-wrap gap-2">
                <?php foreach ($data['social'] as $s): ?>
                  <a href="<?= esc($s['href'] ?? '#') ?>" target="_blank" rel="noopener"
                     class="tb-btn tb-btn--outline d-flex align-items-center gap-2"
                     style="border-radius:50px; padding:0.6rem 1.2rem; font-size:0.82rem">
                    <i class="bi <?= esc($s['icon']) ?>"></i>
                    <?= esc($s['label'] ?? '') ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

          <?php if (!empty($data['hashtag'])): ?>
            <div class="mt-4 text-center">
              <span class="rounded-pill px-4 py-2 d-inline-block" style="background:rgba(var(--tb-primary-rgb),0.1); color:var(--tb-primary); font-size:0.9rem; font-weight:600">
                <i class="bi bi-hash me-1"></i><?= esc($data['hashtag']) ?>
              </span>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>