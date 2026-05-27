<?php /* === FAQ ACCORDION MEJORADO === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'faq') ?>" class="tb-section tb-faq tb-faq--1 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h3 class="tb-section__title "><?= esc($d['title']) ?></h3><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <?php $i = 0; foreach ($data['items'] ?? [] as $item): $i++; ?>
            <div class="accordion-item mb-3 rounded-3 overflow-hidden border-0 shadow-sm">
              <h3 class="accordion-header">
                <button class="accordion-button tb-faq-btn <?= $i > 1 ? 'collapsed' : '' ?> fw-semibold rounded-3 py-3 px-4 fs-4"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>"
                        aria-expanded="<?= $i === 1 ? 'true' : 'false' ?>" aria-controls="faq<?= $i ?>">
                  <?php if (!empty($item['icon'])): ?>
                    <span class="tb-faq-icon"><i class="bi <?= esc($item['icon']) ?>"></i></span>
                  <?php endif; ?>
                  <span class="flex-grow-1"><?= esc($item['q'] ?? '') ?></span>
                </button>
              </h3>
              <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i === 1 ? 'show' : '' ?>" data-bs-parent="#faqAccordion">
                <div class="accordion-body px-4 pb-4 pt-0">
                  <div class="ps-5 ms-2 border-start border-2 tb-faq-answer">
                    <p class="tb-faq-text mb-0 py-3"><?= nl2br(esc($item['a'] ?? '')) ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <?php if (!empty($data['cta_text'])): ?>
          <div class="text-center mt-5 pt-3">
            <p class="tb-faq-cta mb-3"><?= esc($data['cta_text']) ?></p>
            <?php if (!empty($data['cta_link'])): ?>
              <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['cta_link']) ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> <?= esc($data['cta_label'] ?? 'Consultar por WhatsApp') ?>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
