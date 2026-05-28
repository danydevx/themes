<?php /* === PACKAGES4 COMPARISON TABLE === */ ?>
<?php $d = section_defaults($data); ?>
<?php $plans = $d['plans'] ?? []; ?>
<?php $features = $d['features'] ?? []; ?>

<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section tb-packages--4 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php if (!empty($plans) && !empty($features)): ?>
      <div class="tb-packages--4__table-wrap">
        <table class="tb-packages--4__table table mb-0 align-middle">
          <thead>
            <tr>
              <th class="tb-packages--4__head tb-packages--4__head--feature">Característica</th>
              <?php foreach ($plans as $plan): ?>
                <th class="tb-packages--4__head text-center">
                  <div class="tb-packages--4__plan-name"><?= esc($plan['name'] ?? '') ?></div>
                  <div class="tb-packages--4__plan-price"><?= esc($plan['price'] ?? '') ?></div>
                </th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($features as $feature): ?>
              <tr>
                <td class="tb-packages--4__feature"><?= esc($feature['label'] ?? '') ?></td>
                <?php foreach ($plans as $plan): ?>
                  <?php $key = $plan['key'] ?? ''; $val = $feature[$key] ?? ''; ?>
                  <td class="text-center tb-packages--4__cell">
                    <?php if ($val === true || $val === 'yes'): ?>
                      <i class="bi bi-check-circle-fill tb-packages--4__ok" aria-hidden="true"></i>
                    <?php elseif ($val === false || $val === 'no'): ?>
                      <i class="bi bi-x-circle tb-packages--4__no" aria-hidden="true"></i>
                    <?php else: ?>
                      <span class="tb-packages--4__value"><?= esc((string)$val) ?></span>
                    <?php endif; ?>
                  </td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="tb-packages--4__actions d-flex flex-wrap justify-content-center gap-2 mt-4">
        <?php foreach ($plans as $plan): ?>
          <?php if (!empty($plan['cta']['href'])): ?>
            <a class="tb-btn tb-btn--outline" href="<?= esc($plan['cta']['href']) ?>" target="_blank" rel="noopener">
              <?= esc($plan['cta']['label'] ?? ('Solicitar ' . ($plan['name'] ?? 'paquete'))) ?>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
