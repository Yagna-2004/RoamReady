// JavaScript for Navbar Toggle Button
const navOpenBtn = document.querySelector('[data-nav-open-btn]');
const navCloseBtn = document.querySelector('[data-nav-close-btn]');
const navbar = document.querySelector('[data-navbar]');

navOpenBtn.addEventListener('click', () => {
  navbar.classList.add('active');
});

navCloseBtn.addEventListener('click', () => {
  navbar.classList.remove('active');
});

// JavaScript for Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// JavaScript for Go To Top Button
const goTopBtn = document.querySelector('[data-go-top]');

window.addEventListener('scroll', () => {
  if (window.scrollY > 100) {
    goTopBtn.classList.add('active');
  } else {
    goTopBtn.classList.remove('active');
  }
});

goTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
