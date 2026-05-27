<?php /* === FOOTER6 SPLIT BRAND + SOCIAL COLUMN === */ ?>
<?php $dark = !empty($data['dark']); ?>
<footer class="tb-footer tb-footer--6" style="background:<?= $dark ? 'var(--tb-bg)' : 'var(--tb-text)' ?>; color:<?= $dark ? 'var(--tb-muted)' : 'rgba(255,255,255,0.7)' ?>; padding-top:4rem">
  <div class="container">
    <div class="row g-5 pb-4">

      <!-- Brand column -->
      <div class="col-lg-5">
        <div class="d-flex align-items-center gap-2 mb-3">
          <?php if (!empty($data['logo_icon'])): ?>
            <i class="bi <?= esc($data['logo_icon']) ?>" style="font-size:1.8rem; color:var(--tb-primary)"></i>
          <?php endif; ?>
          <span class="fw-bold fs-4" style="color:<?= $dark ? 'var(--tb-text)' : '#fff' ?>; font-family:var(--tb-heading-font)"><?= esc($data['logo'] ?? 'Terraza') ?></span>
        </div>
        <?php if (!empty($data['desc'])): ?>
          <p class="mb-4" style="font-size:0.88rem; line-height:1.7; color:<?= $dark ? 'var(--tb-muted)' : 'rgba(255,255,255,0.5)' ?>; max-width:340px"><?= esc($data['desc']) ?></p>
        <?php endif; ?>
        <?php if (!empty($data['social'])): ?>
          <div class="d-flex gap-2">
            <?php foreach ($data['social'] as $s): ?>
              <a href="<?= esc($s['href'] ?? '#') ?>" target="<?= !empty($s['target']) ? '_blank' : '_self' ?>" rel="noopener"
                 class="d-flex align-items-center justify-content-center rounded-circle"
                 style="width:40px; height:40px; border:1px solid <?= $dark ? 'rgba(212,168,151,0.2)' : 'rgba(255,255,255,0.15)' ?>; color:<?= $dark ? 'var(--tb-muted)' : 'rgba(255,255,255,0.5)' ?>; font-size:1rem; transition:all 0.3s ease"
                 aria-label="<?= esc($s['label'] ?? 'Social') ?>">
                <i class="bi <?= esc($s['icon']) ?>"></i>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Links column -->
      <?php if (!empty($data['columns'])): ?>
        <div class="col-lg-3">
          <?php foreach ($data['columns'] as $col): ?>
            <?php if (!empty($col['heading'])): ?>
              <h5 class="fw-bold mb-3 small" style="color:<?= $dark ? 'var(--tb-text)' : '#fff' ?>; text-transform:uppercase; letter-spacing:0.06em; font-size:0.78rem"><?= esc($col['heading']) ?></h5>
            <?php endif; ?>
            <?php if (!empty($col['links'])): ?>
              <ul class="list-unstyled mb-4">
                <?php foreach ($col['links'] as $link): ?>
                  <li class="mb-2">
                    <a href="<?= esc($link['href'] ?? '#') ?>" style="font-size:0.88rem; color:<?= $dark ? 'var(--tb-muted)' : 'rgba(255,255,255,0.5)' ?>; transition:color 0.3s ease">
                      <?= esc($link['label'] ?? '') ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Contact column -->
      <?php if (!empty($data['contact_items'])): ?>
        <div class="col-lg-4">
          <h5 class="fw-bold mb-3 small" style="color:<?= $dark ? 'var(--tb-text)' : '#fff' ?>; text-transform:uppercase; letter-spacing:0.06em; font-size:0.78rem">Contacto</h5>
          <?php foreach ($data['contact_items'] as $ci): ?>
            <div class="d-flex align-items-start gap-2 mb-3">
              <i class="bi <?= esc($ci['icon'] ?? 'bi-check') ?>" style="color:var(--tb-primary); flex-shrink:0; margin-top:0.1rem"></i>
              <span style="font-size:0.88rem; color:<?= $dark ? 'var(--tb-muted)' : 'rgba(255,255,255,0.5)' ?>"><?= nl2br(esc($ci['text'] ?? '')) ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>

    <!-- Bottom bar -->
    <div class="border-top py-3" style="border-color:<?= $dark ? 'rgba(212,168,151,0.1)' : 'rgba(255,255,255,0.08)' ?> !important">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
        <?php if (!empty($data['copyright'])): ?>
          <p class="mb-0 small" style="color:<?= $dark ? 'rgba(184,168,160,0.5)' : 'rgba(255,255,255,0.3)' ?>"><?= esc($data['copyright']) ?></p>
        <?php endif; ?>
        <?php if (!empty($data['legal_links'])): ?>
          <div class="d-flex gap-3">
            <?php foreach ($data['legal_links'] as $ll): ?>
              <a href="<?= esc($ll['href'] ?? '#') ?>" class="small" style="color:<?= $dark ? 'rgba(184,168,160,0.5)' : 'rgba(255,255,255,0.3)' ?>">
                <?= esc($ll['label'] ?? '') ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</footer>