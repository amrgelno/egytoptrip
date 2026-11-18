$(document).ready((function (e) { $(".loadingscreen").delay(8000).fadeOut() }));
let started = false;
// Function Started ? No window.onscroll = function ()
$(window).scroll(function () {

    let nums = document.querySelectorAll(".counter-number,counter-num");

    if ($(window).scrollTop() >= $('.navbar').offset().top) {

        if (!started) { nums.forEach((num) => startCount(num)); } started = true;
    }
});


function startCount(el) {
    let target = el.dataset.target;
    let ourcounter = setInterval(() => { el.textContent++; if (el.textContent == target) { clearInterval(ourcounter); } }, 4000 / target);
}









