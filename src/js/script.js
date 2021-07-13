import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});