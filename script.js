// <!-- Swiper JS (load BEFORE your init) -->

document.addEventListener('DOMContentLoaded', () => {
  lightGallery(document.getElementById('lightgallery'), {
    selector: 'li',
    plugins: [lgZoom, lgThumbnail],
    speed: 500,
    download: false,
    licenseKey: '0000-0000-000-0000',
    controls: true,
    loop: true,
    escKey: true,
    slideEndAnimation: true,
  });
});

// <!-- Swiper Initialization -->
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    keyboard: { enabled: true },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: '.custom-next',
      prevEl: '.custom-prev',
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 30 },
      1440: { slidesPerView: 4, spaceBetween: 30 },
    },
  });
});

// <!-- Toggle mobile menu -->
const menuBtn = document.getElementById('menu-btn');
const mobileNav = document.getElementById('mobile-nav');
const closeNav = document.getElementById('close-nav');

menuBtn.addEventListener('click', () => {
  mobileNav.classList.remove('hidden');
});

closeNav.addEventListener('click', () => {
  mobileNav.classList.add('hidden');
});
