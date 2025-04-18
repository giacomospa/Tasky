import './bootstrap';

import "bootstrap/dist/js/bootstrap.min.js";

// Animazione Logo
let logo = document.querySelector("#logo");

window.addEventListener("DOMContentLoaded", () => {
    logo.classList.add("logo-animation");
});

// Hero Section Particles
particlesJS("particles-js", {
    "particles": {
        "number": { "value": 80 },  // Numero di particelle
        "size": { "value": 2 },     // Dimensione delle particelle
        "move": { "speed": 3 },     // Velocità di movimento
        "line_linked": {
            "enable": true,         // Connessione tra le particelle
            "distance": 180,        // Distanza massima tra particelle per collegarsi
            "color": "#f4f6f5"
        }
    }
});


// Effetto Scroll su Freccia 
let arrow= document.querySelector("#arrow");

arrow.addEventListener("click",()=>{

    let chiSiamo = document.querySelector("#aboutUs");
    chiSiamo.scrollIntoView({ behavior: "smooth" });
})


