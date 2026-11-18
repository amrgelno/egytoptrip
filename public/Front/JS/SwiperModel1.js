//import { Swiper } from "./swiper-bundle.min.js";

import { Swiper } from "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs";

export function Swiper1() {


    const swiper = new Swiper(".swiperpricecard", {
        // Optional parameters
        autoplay: {
            delay: 2000,
        },
        direction: "horizontal",
        speed: 300,
        loop: true,

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        //scrollbar: {
        //  el: ".swiper-scrollbar",
        //},
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
            750: {
                slidesPerView: 2,
            },
            999: {
                slidesPerView: 4,
            },
        },
    });
}












