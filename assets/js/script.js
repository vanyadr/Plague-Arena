import Swiper from "../libraries/swiper/swiper.min.mjs";
import Navigation from "../libraries/swiper/modules/navigation.min.mjs";
import Autoplay from "../libraries/swiper/modules/autoplay.min.mjs";

// Get elements from DOM
const burger = document.querySelector(".header-nav__burger");
const closer = document.querySelector(".header-nav__closer");
const menu = document.querySelector(".header-nav");

// Start scrips on DOM load
document.addEventListener("DOMContentLoaded", () => {
   toggleBurger(burger, closer);
   initSliderMenu();
   initSliderEvents();
});

//Functions
const toggleBurger = (openEl, closeEl) => {
   openEl.addEventListener("click", () => {
      menu.classList.add("opened");
   });
   closeEl.addEventListener("click", () => {
      menu.classList.remove("opened");
   });
};
const initSliderMenu = () => {
   const swiper = new Swiper(".swiper-menu", {
      modules: [Autoplay],
      slidesPerView: 3.5,
      speed: 400,
      spaceBetween: 8,
      autoplay: {
         delay: 3000,
         pauseOnMouseEnter: true,
      },
      breakpoints: {
         769: {
            slidesPerView: 5,
            spaceBetween: 8,
         },
         1025: {
            slidesPerView: 7,
            spaceBetween: 16,
         },
         1401: {
            slidesPerView: 7,
            spaceBetween: 24,
         },
         1801: {
            slidesPerView: 9,
            spaceBetween: 24,
         },
      },
      loop: true,
      centeredSlides: true,
   });
};
const initSliderEvents = () => {
   const swiper = new Swiper(".swiper-events", {
      modules: [Navigation],
      slidesPerView: 1,
      speed: 400,
      spaceBetween: 12,
      navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
      },
      breakpoints: {
         769: {
            slidesPerView: 2,
            spaceBetween: 12,
         },
         1025: {
            slidesPerView: 3,
            spaceBetween: 24,
         },
         1401: {
            slidesPerView: 3,
            spaceBetween: 24,
         },
         1801: {
            slidesPerView: 4,
            spaceBetween: 24,
         },
      },
   });
};
const animate = () => {
   const observer = new IntersectionObserver(
      (entries) => {
         entries.forEach((entry) => {
            if (entry.isIntersecting) {
               entry.target.classList.add("animate");
            }
         });
      },
      {
         threshold: 1,
         rootMargin: "0px 0px -300px 0px",
      },
   );

   document.querySelectorAll(".animate-on-scroll").forEach((el) => {
      observer.observe(el);
   });
};
