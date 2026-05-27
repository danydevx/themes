<?php /* === MAP4 LOCATION + INFO CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-map--4 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">

    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4 align-items-start">
      <!-- Map -->
      <div class="col-lg-7">
        <div class="rounded-4 overflow-hidden shadow-lg mb-4">
          <iframe
            class="w-100"
            src="<?= esc($data['map_src'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14929.052536526394!2d-103.409631!3d20.653916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add9a9232fe3%3A0x4cf3ee4e3f8b5c6a!2sZapopan%2C%20Jal.!5e0!3m2!1ses!2smx!4v1700000000000') ?>"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?= esc($data['map_title'] ?? 'Ubicación de Terraza Alhelí') ?>"
            style="height:380px; border:0">
          </iframe>
        </div>

        <?php if (!empty($data['cta_link'])): ?>
          <a class="tb-btn tb-btn--primary w-100" href="<?= esc($data['cta_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-signpost-2"></i> <?= esc($data['cta_label'] ?? 'Cómo llegar por Google Maps') ?>
          </a>
        <?php endif; ?>
      </div>

      <!-- Info cards -->
      <div class="col-lg-5">
        <div class="d-flex flex-column gap-3">

          <!-- Address card -->
          <div class="tb-map--4__card rounded-4 p-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="d-flex align-items-start gap-3">
              <div class="tb-map--4__icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h4 class="fw-bold mb-2" style="font-size:1rem; font-family:var(--tb-heading-font)">Dirección</h4>
                <p class="mb-0" style="color:var(--section-muted); font-size:0.92rem; line-height:1.6">
                  <?= esc($data['address'] ?? 'Av. Alhelí 850, Col. Jardines del Valle, Zapopan, Jalisco') ?>
                </p>
                <?php if (!empty($data['cross_streets'])): ?>
                  <p class="small mb-0 mt-2" style="color:var(--section-muted)">
                    <i class="bi bi-arrows-intersection me-1"></i> <?= esc($data['cross_streets']) ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Phone card -->
          <div class="tb-map--4__card rounded-4 p-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="d-flex align-items-start gap-3">
              <div class="tb-map--4__icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div>
                <h4 class="fw-bold mb-2" style="font-size:1rem; font-family:var(--tb-heading-font)">Teléfono</h4>
                <p class="mb-2" style="color:var(--section-muted); font-size:0.92rem">
                  <?= esc($data['phone'] ?? '+52 33 1234 5678') ?>
                </p>
                <?php if (!empty($data['whatsapp'])): ?>
                  <a class="tb-btn tb-btn--whatsapp btn-sm" href="<?= esc($data['whatsapp']) ?>" target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp"></i> Enviar WhatsApp
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Hours card -->
          <div class="tb-map--4__card rounded-4 p-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="d-flex align-items-start gap-3">
              <div class="tb-map--4__icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div>
                <h4 class="fw-bold mb-2" style="font-size:1rem; font-family:var(--tb-heading-font)">Horario de visitas</h4>
                <?php if (!empty($data['hours'])): ?>
                  <?php foreach ($data['hours'] as $h): ?>
                    <div class="d-flex justify-content-between small mb-1" style="color:var(--section-muted)">
                      <span><?= esc($h['days'] ?? '') ?></span>
                      <span class="fw-semibold" style="color:var(--section-text)"><?= esc($h['time'] ?? '') ?></span>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p class="mb-0" style="color:var(--section-muted); font-size:0.92rem">Lunes a Sábado: 10:00 AM - 6:00 PM</p>
                  <p class="mb-0" style="color:var(--section-muted); font-size:0.92rem">Domingo: previa cita</p>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Email card -->
          <div class="tb-map--4__card rounded-4 p-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="d-flex align-items-start gap-3">
              <div class="tb-map--4__icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <h4 class="fw-bold mb-2" style="font-size:1rem; font-family:var(--tb-heading-font)">Correo electrónico</h4>
                <p class="mb-0" style="color:var(--section-muted); font-size:0.92rem">
                  <?= esc($data['email'] ?? 'hola@terrazaalheli.com') ?>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>