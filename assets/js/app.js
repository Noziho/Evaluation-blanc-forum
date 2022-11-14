import '../../assets/css/style.css';
import anime from 'animejs/lib/anime.es.js';

const contactButton = document.querySelector("#contactButton");

anime({
    targets: '#homeTittle',
    fontSize: ["0rem", "3rem"],
    delay: 100,
    duration: 1000,
});

anime({
    targets: '#test, .contact_form',
    translateX: ["0rem", "5rem"],
    delay: 100,
    duration: 1000,
});
