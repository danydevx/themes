<?php /* === CONTACT3 CENTERED MINIMAL FORM === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'contacto') ?>" class="tb-section tb-contact--3 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6">
        <form class="tb-form p-4 p-md-5">
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
                  <textarea class="form-control" id="<?= esc($field['id']) ?>" rows="<?= esc((string)($field['rows'] ?? 4)) ?>" placeholder="<?= esc($field['placeholder'] ?? '') ?>"></textarea>
                <?php else: ?>
                  <input type="<?= esc($field['type'] ?? 'text') ?>" class="form-control" id="<?= esc($field['id']) ?>" placeholder="<?= esc($field['placeholder'] ?? '') ?>" <?= !empty($field['required']) ? 'required' : '' ?>>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>

            <div class="col-12 text-center mt-4">
              <button type="submit" class="tb-btn tb-btn--primary tb-btn--lg">
                <i class="bi bi-send-fill me-2"></i><?= esc($data['btn_label'] ?? 'Enviar') ?>
              </button>
            </div>
          </div>
        </form>

        <?php if (!empty($data['social'])): ?>
          <div class="text-center mt-4 pt-4 border-top" style="border-color:var(--section-border)!important">
            <p class="small mb-3" style="color:var(--section-muted)"><?= esc($data['info_title'] ?? 'Síguenos en redes') ?></p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
              <?php foreach ($data['social'] as $s): ?>
                <a href="<?= esc($s['href'] ?? '#') ?>" target="_blank" rel="noopener" class="tb-btn tb-btn--outline d-flex align-items-center gap-2" style="border-radius:50px; padding:0.6rem 1.2rem; font-size:0.82rem">
                  <i class="bi <?= esc($s['icon']) ?>"></i>
                  <?= esc($s['label'] ?? '') ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php if (!empty($data['hashtag'])): ?>
          <div class="text-center mt-3">
            <span class="rounded-pill px-4 py-2 d-inline-block small" style="background:rgba(var(--tb-primary-rgb),0.1); color:var(--tb-primary); font-weight:600">
              <i class="bi bi-hash me-1"></i><?= esc($data['hashtag']) ?>
            </span>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>