/*
  This function will add the corresponding classes that enable the mobile menu to be toggled on and off.
*/
function menuClick() {
  menuBtn.classList.toggle("opened-menu");
  mobileMenu.classList.toggle("show-menu");
  shadowOverlay.classList.toggle("overlay");
}

const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const shadowOverlay = document.getElementById("overlay");

menuBtn.addEventListener("click", menuClick);
