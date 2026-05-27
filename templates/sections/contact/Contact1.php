<?php /* === CONTACT FORM === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'contacto') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
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
    </div>
  </div>
</section>
