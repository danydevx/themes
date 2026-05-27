/* ═══════════════════════════════════════
   Terraza Las Flores — Main JS
   Festivo: GLightbox gallery, AOS, header scroll
   ═══════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', function () {

  AOS.init({
    duration: 600,
    once: true,
    offset: 100
  });

  var header = document.querySelector('.tb-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  var galleryLinks = document.querySelectorAll('.tb-gallery-lightbox');
  if (galleryLinks.length) {
    GLightbox({
      selector: '.tb-gallery-lightbox',
      touchNavigation: true,
      loop: false
    });
  }

});
