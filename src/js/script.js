import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';
import MagicGrid from "magic-grid";
import Masonry from 'masonry-layout';

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