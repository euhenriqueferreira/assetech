import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { Navigation, Pagination } from 'swiper/modules';

const swiper = new Swiper('.our-services ul', {
    modules: [Navigation, Pagination],

    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    loop: false,

    breakpoints: {
        1280: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
        1199: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 0
        },
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});