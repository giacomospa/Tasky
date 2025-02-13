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
        "size": { "value": 3 },     // Dimensione delle particelle
        "move": { "speed": 2 },     // Velocità di movimento
        "line_linked": {
            "enable": true,         // Connessione tra le particelle
            "distance": 150,        // Distanza massima tra particelle per collegarsi
            "color": "#ffffff"
        }
    }
});

