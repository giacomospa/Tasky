import './bootstrap';

import "bootstrap/dist/js/bootstrap.min.js";


let logo = document.querySelector("#logo");

window.addEventListener("DOMContentLoaded", () => {
    logo.classList.add("logo-animation");
});
