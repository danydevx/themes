<?php /* === HEADER3 FLEX WITH CTA RIGHT === */ ?>
<header class="tb-header tb-header--3">
  <div class="container">
    <nav class="navbar navbar-expand-lg p-0">

      <!-- Logo -->
      <a class="tb-header__logo navbar-brand" href="#">
        <?php if (!empty($data['icon'])): ?><i class="bi <?= esc($data['icon']) ?>"></i><?php endif; ?>
        <?= esc($data['brand'] ?? 'Terraza') ?>
      </a>

      <!-- Mobile toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav3" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav links center -->
      <div class="collapse navbar-collapse justify-content-center" id="mainNav3">
        <ul class="navbar-nav align-items-lg-center gap-lg-2">
          <?php foreach ($data['links'] ?? [] as $link): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- CTA right -->
      <?php if (!empty($data['show_wa'])): ?>
        <a class="tb-btn tb-btn--whatsapp ms-auto d-none d-lg-inline-flex" href="<?= esc($data['wa_link'] ?? wa_link('Hola, me gustaría recibir información.')) ?>" target="_blank" rel="noopener">
          <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
      <?php endif; ?>

    </nav>
  </div>
</header>