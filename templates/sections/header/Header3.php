<?php /* === HEADER CENTERED === */ ?>
<header class="tb-header text-center">
  <div class="container">
    <a class="tb-header__logo navbar-brand d-block mb-1" href="#" style="display:block; text-align:center;">
      <?php if (!empty($data['icon'])): ?><i class="bi <?= esc($data['icon']) ?>"></i><?php endif; ?>
      <?= esc($data['brand'] ?? 'Terraza') ?>
    </a>
    <nav class="navbar navbar-expand-lg p-0 justify-content-center">
      <button class="navbar-toggler border-0 mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="mainNav">
        <ul class="navbar-nav align-items-lg-center gap-lg-2">
          <?php foreach ($data['links'] ?? [] as $link): ?>
            <li class="nav-item">
              <a class="nav-link px-3" href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a>
            </li>
          <?php endforeach; ?>
          <?php if (!empty($data['show_wa'])): ?>
            <li class="nav-item ms-lg-2">
              <a class="tb-btn tb-btn--whatsapp" href="<?= esc($data['wa_link'] ?? wa_link('Hola')) ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> WhatsApp
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
