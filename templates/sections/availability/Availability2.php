<?php /* === AVAILABILITY TABLE === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'disponibilidad') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="table-responsive rounded-4 overflow-hidden" style="border:1px solid var(--section-border)">
      <table class="table table-borderless mb-0 text-center align-middle">
        <thead style="background:var(--tb-primary); color:#fff">
          <tr>
            <th class="py-3"><?= esc($data['month_label'] ?? 'Mes') ?></th>
            <th class="py-3">Lun</th><th class="py-3">Mar</th><th class="py-3">Mié</th><th class="py-3">Jue</th>
            <th class="py-3">Vie</th><th class="py-3">Sáb</th><th class="py-3">Dom</th>
          </tr>
        </thead>
        <tbody style="background:var(--section-surface)">
          <?php $ci = 0; foreach ($data['weeks'] ?? [] as $week): ?>
            <tr>
              <td class="fw-semibold small" style="color:var(--section-muted)"><?= esc($week['label'] ?? '') ?></td>
              <?php for ($dow = 0; $dow < 7; $dow++): ?>
                <?php $day = $week['days'][$dow] ?? null; $ci++; ?>
                <?php if ($day): ?>
                  <?php $statusClass = $day['status'] === 'available' ? 'success' : ($day['status'] === 'reserved' ? 'warning' : 'danger'); ?>
                  <?php $statusLabel = $day['status'] === 'available' ? 'bg-success-subtle text-success' : ($day['status'] === 'reserved' ? 'bg-warning-subtle text-warning' : 'bg-danger-subtle text-danger'); ?>
                  <td class="p-2">
                    <div class="rounded-2 py-2 px-1 small fw-semibold <?= $statusLabel ?>">
                      <?= esc($day['date'] ?? '') ?>
                    </div>
                  </td>
                <?php else: ?>
                  <td></td>
                <?php endif; ?>
              <?php endfor; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-center gap-3 mt-3 small" style="color:var(--section-muted)">
      <span><span class="tb-dot tb-dot-success me-1"></span> Disponible</span>
      <span><span class="tb-dot tb-dot-warning me-1"></span> Apartada</span>
      <span><span class="tb-dot tb-dot-danger me-1"></span> No disponible</span>
    </div>

    <div class="text-center mt-4">
      <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['wa_link'] ?? wa_link('Hola, me gustaría consultar disponibilidad.')) ?>" target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($data['wa_label'] ?? 'Consultar fecha por WhatsApp') ?>
      </a>
    </div>
  </div>
</section>
