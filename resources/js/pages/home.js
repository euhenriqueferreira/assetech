
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';

const ourServices = new Swiper('.our-services ul.swiper', {
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
    modules: [Navigation, Pagination, Autoplay],

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


const ourHistory = new Swiper('.our-history ul.swiper', {
    modules: [Navigation, Pagination, Autoplay],

    slidesPerView: 1,
    spaceBetween: 20,
    direction: 'horizontal',
    loop: false,
    autoplay: {
        delay: 3000,
    },

    breakpoints: {
        1199: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // 767: {
        //     slidesPerView: 2,
        //     spaceBetween: 20,
        // },
    },


    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// $(document).on('load', function () {
//     $('body').on('click', function (event) {
//         console.log(event.target)
//     })
// })