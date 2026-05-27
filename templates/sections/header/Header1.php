<?php /* === HEADER === */ ?>
<header class="tb-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg p-0">
      <a class="tb-header__logo navbar-brand" href="#">
        <?php if (!empty($data['icon'])): ?><i class="bi <?= esc($data['icon']) ?>"></i><?php endif; ?>
        <?= esc($data['brand'] ?? 'Terraza Balcones') ?>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
              aria-controls="mainNav" aria-expanded="false" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
          <?php foreach ($data['links'] ?? [] as $link): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a>
            </li>
          <?php endforeach; ?>
          <?php if (!empty($data['show_wa'])): ?>
            <li class="nav-item ms-lg-2">
              <a class="tb-btn tb-btn--whatsapp" href="<?= esc($data['wa_link'] ?? wa_link('Hola, me gustaría recibir información sobre ' . ($data['brand'] ?? 'Terraza Balcones') . '.')) ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> WhatsApp
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
