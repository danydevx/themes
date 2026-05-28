<?php /* === FOOTER7 DARK WITH ACCENT IMAGERY === */ ?>
<?php $d = section_defaults($data); ?>
<footer class="tb-footer tb-footer--7 <?= esc($d['scheme']) ?>">
  <div class="container">
    <div class="tb-footer--7__grid row g-5 pb-5 border-bottom">

      <!-- Brand -->
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="tb-footer--7__brand-icon bi <?= esc($d['logo_icon'] ?? 'bi-droplet-fill') ?>"></i>
          <span class="tb-footer--7__brand fw-bold fs-4"><?= esc($d['logo'] ?? 'Terraza') ?></span>
        </div>
        <?php if (!empty($d['desc'])): ?>
          <p class="tb-footer--7__desc mb-4"><?= esc($d['desc']) ?></p>
        <?php endif; ?>
        <?php if (!empty($d['social'])): ?>
          <div class="d-flex gap-2">
            <?php foreach ($d['social'] as $s): ?>
              <a href="<?= esc($s['href'] ?? '#') ?>" target="<?= !empty($s['target']) ? '_blank' : '_self' ?>" rel="noopener"
                 class="tb-footer--7__social d-flex align-items-center justify-content-center rounded-circle"
                 aria-label="<?= esc($s['label'] ?? 'Social') ?>">
                <i class="bi <?= esc($s['icon']) ?>"></i>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Links -->
      <?php if (!empty($d['columns'])): ?>
        <div class="col-lg-4">
          <?php foreach ($d['columns'] as $col): ?>
            <?php if (!empty($col['heading'])): ?>
              <h5 class="tb-footer--7__heading fw-bold mb-3 small"><?= esc($col['heading']) ?></h5>
            <?php endif; ?>
            <?php if (!empty($col['links'])): ?>
              <ul class="list-unstyled mb-4">
                <?php foreach ($col['links'] as $link): ?>
                  <li class="mb-2">
                    <a class="tb-footer--7__link" href="<?= esc($link['href'] ?? '#') ?>">
                      <?= esc($link['label'] ?? '') ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Contact -->
      <?php if (!empty($d['contact_items'])): ?>
        <div class="col-lg-4">
          <h5 class="tb-footer--7__heading fw-bold mb-3 small">Contacto</h5>
          <?php foreach ($d['contact_items'] as $ci): ?>
            <div class="d-flex align-items-start gap-2 mb-3">
              <i class="tb-footer--7__contact-icon bi <?= esc($ci['icon'] ?? 'bi-check') ?>"></i>
              <span class="tb-footer--7__contact-text"><?= nl2br(esc($ci['text'] ?? '')) ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>

    <!-- Bottom bar -->
    <div class="py-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
      <?php if (!empty($d['copyright'])): ?>
        <p class="tb-footer--7__legal mb-0 small"><?= esc($d['copyright']) ?></p>
      <?php endif; ?>
      <?php if (!empty($d['legal_links'])): ?>
        <div class="d-flex gap-3">
          <?php foreach ($d['legal_links'] as $ll): ?>
            <a href="<?= esc($ll['href'] ?? '#') ?>" class="tb-footer--7__legal small">
              <?= esc($ll['label'] ?? '') ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</footer>
