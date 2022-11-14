import '../../assets/css/style.css';
import anime from 'animejs/lib/anime.es.js';

anime({
    targets: '#homeTittle',
    fontSize: ["0rem", "3rem"],
    delay: 100,
    duration: 1000,
});

anime({
    targets: '#test',
    translateX: ["0rem", "5rem"],
    delay: 100,
    duration: 1000,
});