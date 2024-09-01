// open menu star
let menu_star = document.getElementById("menu_star");

function open_menu_star() {
  menu_star.classList.add("open_star");
}

function close_menu_star() {
  menu_star.classList.remove("open_star");
}



// open Menu nav
let open = document.getElementById("menu");
let close = document.getElementById("close");
let nav = document.getElementById("nav");

open.addEventListener("click", () => {
  nav.style.left = "0";
  close.style.display = "flex";
  open.style.display = "none";  
});

close.addEventListener("click", () => {
  nav.style.left = "-99%";
  close.style.display = "none";
  open.style.display = "flex";
});



// search
let opne_search = document.getElementById("opne_search");
let search_input = document.getElementById("search_input");
let close_search = document.getElementById("close_search");

opne_search.addEventListener("click", () => {
  search_input.style.display = "flex";
  close_search.style.display = "flex";
});

close_search.addEventListener("click", () => {
  search_input.style.display = "none";
  close_search.style.display = "none";
});



// dropdown_notifications
let dropdown_notifications = document.getElementById("dropdown_notifications");

function notifications() {
  dropdown_notifications.classList.toggle("show_dropdown");
}



// swiper
const swiper = new Swiper(".swiper", {
  pagination: {
    el: ".swiper-pagination",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
