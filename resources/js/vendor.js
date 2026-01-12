import '../vendor/bootstrap/js/bootstrap.bundle.min.js';
import '../vendor/glightbox/js/glightbox.min.js';
import '../vendor/purecounter/purecounter_vanilla.js';
import '../vendor/swiper/swiper-bundle.min.js';
import '../vendor/php-email-form/validate.js';

const ensureGlobal = (name, fallback) => {
  if (window[name]) {
    return window[name];
  }
  if (fallback) {
    window[name] = fallback;
  }
  return window[name];
};

ensureGlobal('AOS', window.AOS);
ensureGlobal('GLightbox', window.GLightbox);
ensureGlobal('PureCounter', window.PureCounter);
ensureGlobal('Swiper', window.Swiper);
