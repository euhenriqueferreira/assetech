import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { Autoplay, Pagination } from 'swiper/modules';

const infoIcons = new Swiper('.info-icons ul.swiper', {
    modules: [Pagination, Autoplay],

    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    direction: 'horizontal',
    loop: false,
    autoplay: {
        delay: 3000,
    },

    breakpoints: {
        1199: {
            slidesPerView: 4,
            spaceBetween: 60,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 50,
            slidesPerGroup: 2,
        },
    },

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});

const testimonials = new Swiper('.testimonials ul.swiper', {
    modules: [Pagination, Autoplay],

    slidesPerView: 1,
    spaceBetween: 10,
    direction: 'horizontal',
    loop: false,
    autoplay: {
        delay: 3000,
    },

    breakpoints: {
        1280: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1199: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        767: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});