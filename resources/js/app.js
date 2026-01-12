import './bootstrap';
import './vendor';
import './template-main';

const initScrollAnimations = () => {
  const elements = Array.from(document.querySelectorAll('[data-aos]'));
  if (elements.length === 0) {
    return;
  }

  const applyDelay = (el) => {
    const delay = el.getAttribute('data-aos-delay');
    if (delay) {
      el.style.transitionDelay = `${delay}ms`;
    }
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        applyDelay(entry.target);
        entry.target.classList.add('aos-animate');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  elements.forEach((el) => observer.observe(el));
};

if (document.readyState === 'complete' || document.readyState === 'interactive') {
  initScrollAnimations();
} else {
  document.addEventListener('DOMContentLoaded', initScrollAnimations);
}
