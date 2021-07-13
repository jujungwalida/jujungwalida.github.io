import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';

window.Alpine = Alpine
Alpine.start()

const swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});