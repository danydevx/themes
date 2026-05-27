/* ═══════════════════════════════════════
   Terraza Los Girasoles — Main JS
   Inicializaciones: AOS, Accordion (FAQ)
   ═══════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', function () {
  /* ── AOS animation ── */
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 700, once: true, offset: 60 });
  }

  /* ── Accordion Bootstrap (FAQ) ── */
  const accordions = document.querySelectorAll('.accordion');
  accordions.forEach(function (acc) {
    acc.addEventListener('shown.bs.collapse', function () {
      acc.querySelectorAll('.accordion-item').forEach(function (item) {
        const header = item.querySelector('.accordion-button');
        if (header && !header.classList.contains('collapsed')) {
          header.style.color = 'var(--heading-color, var(--tb-text))';
        }
      });
    });
  });
});