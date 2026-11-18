//import { Swiper } from "./swiper-bundle.min.js";



import { Swiper } from "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs";

export function Swiper2() {


    const swiper = new Swiper(".myswiper", {

        // Optional parameters

        autoplay: {
            delay: 6000,
        },


        direction: 'horizontal',

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {

                slidesPerView: 1,

            },


            520: {

                slidesPerView: 2,

            },

            920: {
                slidesPerView: 3,
            },

        },

        // And if we need scrollbar

    });




}
