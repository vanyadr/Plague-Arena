import Swiper from "../libraries/swiper/swiper.min.mjs";
import Navigation from "../libraries/swiper/modules/navigation.min.mjs";
import Autoplay from "../libraries/swiper/modules/autoplay.min.mjs";

// Get elements from DOM
const burger = document.querySelector(".header-nav__burger");
const menu = document.querySelector(".header-nav");
const slidesToClick = document.querySelectorAll(".swiper-slide.clickable");
const modal = document.querySelector(".modal");
const modalCloser = document.querySelector(".modal__closer");

// Start scrips on DOM load
document.addEventListener("DOMContentLoaded", () => {
   toggleBurger(burger);
   initSliderMenu();
   initSliderEvents();
   const modalSlider = initSliderModal();
   toggleModalSlider(modalSlider, modal, slidesToClick, modalCloser);
});

//Functions
const toggleBurger = (openEl) => {
   openEl.addEventListener("click", (e) => {
      e.stopPropagation();

      menu.classList.add("opened");
      document.body.addEventListener("click", closeByOverlay);
   });
   
   const closeByOverlay = (event) => {
      if (event.target !== menu) {
         menu.classList.remove("opened");
         document.body.removeEventListener("click", closeByOverlay);
      }
   }
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
         nextEl: ".events__btn.swiper-button-next",
         prevEl: ".events__btn.swiper-button-prev",
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
const initSliderModal = () => {
   const swiper = new Swiper(".swiper-modal", {
      modules: [Navigation],
      slidesPerView: 1,
      speed: 400,
      spaceBetween: 12,
      centeredSlides: true,
      navigation: {
         nextEl: ".modal__btn.swiper-button-next",
         prevEl: ".modal__btn.swiper-button-prev",
      },
   });

   return swiper;
};
const toggleModalSlider = (slider, modal, slidesToClick, closer) => {
   slidesToClick.forEach((slide) => {
      slide.addEventListener("click", (event) => {
         slider.slideTo(parseInt(event.currentTarget.dataset.swiperSlideIndex), 0, false);
         modal.classList.remove("disappear");
         modal.classList.add("active");
      });
   });
   closer.addEventListener("click", () => {
      modal.classList.remove("active");
      modal.classList.add("disappear");
      modal.style.display = "flex";

      modal.addEventListener("animationend", () => {
         modal.style.display = "";
      });
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
