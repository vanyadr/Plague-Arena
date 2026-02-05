// Get elements from DOM
const burger = document.querySelector(".header-nav__burger");
const closer = document.querySelector(".header-nav__closer");
const menu = document.querySelector(".header-nav");

// Start scrips on DOM load
document.addEventListener("DOMContentLoaded", () => {
   toggleBurger(burger, closer);
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
