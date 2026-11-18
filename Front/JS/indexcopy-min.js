$(document).ready((function (e) {$(".loadingscreen").delay(8000).fadeOut();$("#app").delay(9550).fadeIn();}));
let started=!1;function startCount(t){let e=t.dataset.target,n=setInterval((()=>{t.textContent++,t.textContent==e&&clearInterval(n)}),4e3/e)}$(window).scroll((function(){let t=document.querySelectorAll(".counter-number,counter-num");$(window).scrollTop()>=$(".navbar").offset().top&&(started||t.forEach((t=>startCount(t))),started=!0)}));

