<?php /* === AVAILABILITY STRIPS === */ ?>
<?php $d = section_defaults($data); ?>

<section id="<?= esc($d['id'] ?: 'disponibilidad') ?>" class="tb-section tb-availability tb-availability--3 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="tb-availability--3__list">
      <?php foreach ($data['slots'] ?? [] as $slot): ?>
        <?php
          $status = $slot['status'] ?? 'available';
          $statusLabel = $slot['status_label'] ?? ($status === 'available' ? 'Disponible' : ($status === 'reserved' ? 'Apartada' : 'No disponible'));
          $capacity = max(0, min(100, (int)($slot['capacity'] ?? 0)));
        ?>
        <article class="tb-availability--3__item tb-availability--3__item--<?= esc($status) ?>">
          <div class="tb-availability--3__date-wrap">
            <span class="tb-availability--3__day"><?= esc($slot['day'] ?? '') ?></span>
            <span class="tb-availability--3__date"><?= esc($slot['date'] ?? '') ?></span>
          </div>

          <div class="tb-availability--3__meta">
            <h3 class="tb-availability--3__event"><?= esc($slot['event'] ?? 'Evento privado') ?></h3>
            <p class="tb-availability--3__hours mb-0"><?= esc($slot['hours'] ?? 'Horario por confirmar') ?></p>
          </div>

          <div class="tb-availability--3__status-wrap">
            <span class="tb-availability--3__status tb-availability--3__status--<?= esc($status) ?>"><?= esc($statusLabel) ?></span>
            <div class="tb-availability--3__capacity">
              <span class="tb-availability--3__capacity-label">Ocupacion</span>
              <div class="tb-availability--3__bar">
                <span class="tb-availability--3__bar-fill tb-availability--3__bar-fill--<?= esc($status) ?>" style="width: <?= $capacity ?>%;"></span>
              </div>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="tb-availability--3__legend">
      <span><i class="bi bi-circle-fill tb-availability--3__dot tb-availability--3__dot--available"></i> Disponible</span>
      <span><i class="bi bi-circle-fill tb-availability--3__dot tb-availability--3__dot--reserved"></i> Apartada</span>
      <span><i class="bi bi-circle-fill tb-availability--3__dot tb-availability--3__dot--taken"></i> No disponible</span>
    </div>

    <div class="text-center mt-4">
      <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['wa_link'] ?? wa_link('Hola, quiero consultar disponibilidad para mi evento.')) ?>" target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($data['wa_label'] ?? 'Solicitar disponibilidad personalizada') ?>
      </a>
    </div>
  </div>
</section>
