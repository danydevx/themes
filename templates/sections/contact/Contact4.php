<?php /* === CONTACT4 DARK CARD + SOCIAL + MINI MAP === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'contacto') ?>" class="tb-section tb-contact tb-contact--4 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4 align-items-stretch">
      <div class="col-lg-7">
        <form class="tb-form tb-contact--4__form h-100">
          <div class="row g-3">
            <?php foreach ($d['fields'] ?? [] as $field): ?>
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
                    placeholder="<?= esc($field['placeholder'] ?? '') ?>" <?= !empty($field['required']) ? 'required' : '' ?>>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>

            <div class="col-12">
              <button type="submit" class="tb-btn tb-btn--primary tb-btn--lg w-100">
                <i class="bi bi-send-fill"></i> <?= esc($d['btn_label'] ?? 'Solicitar cotización') ?>
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-5">
        <aside class="tb-contact--4__aside h-100">
          <?php if (!empty($d['info_title'])): ?>
            <h4 class="tb-contact--4__title"><?= esc($d['info_title']) ?></h4>
          <?php endif; ?>

          <?php if (!empty($d['address'])): ?>
            <p class="tb-contact--4__address mb-3">
              <i class="bi bi-geo-alt-fill"></i>
              <?= esc($d['address']) ?>
            </p>
          <?php endif; ?>

          <?php if (!empty($d['map_src'])): ?>
            <div class="tb-contact--4__map-wrap">
              <iframe class="tb-contact--4__map" src="<?= esc($d['map_src']) ?>" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" allowfullscreen
                title="<?= esc($d['map_title'] ?? 'Ubicación') ?>"></iframe>
            </div>
          <?php endif; ?>

          <?php if (!empty($d['social'])): ?>
            <div class="tb-contact--4__socials">
              <?php foreach ($d['social'] as $s): ?>
                <a href="<?= esc($s['href'] ?? '#') ?>" target="_blank" rel="noopener" aria-label="<?= esc($s['label'] ?? 'Red social') ?>"
                  class="tb-contact--4__social">
                  <i class="bi <?= esc($s['icon'] ?? 'bi-link-45deg') ?>"></i>
                  <span><?= esc($s['label'] ?? '') ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </aside>
      </div>
    </div>
  </div>
</section>
