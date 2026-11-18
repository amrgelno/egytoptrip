//import { Swiper } from "./swiper-bundle.min.js";
import { Swiper } from "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs";
export function Swiper3() {


    const swiper = new Swiper(".swiperpartner", {
        // Optional parameters

        direction: "horizontal",
        speed: 800,
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


        spaceBetween: 30,
        breakpoints: {
            750: {
                slidesPerView: 2,
            },
            999: {
                slidesPerView: 3,
            },
        },
    });




}

