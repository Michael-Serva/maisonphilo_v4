// Can also be included with a regular script tag
/* eslint-disable no-unused-vars */

import Typed from "typed.js";

const options = {
  strings: ["<span class=\"title\">Bienvenue chez</span><br><span class=\"sub-title text-success-800\">Maison Philo</span>"],
  typeSpeed: 40,
  loop: true,
  loopCount: 10,
  backSpeed: 50,
  backDelay: 5000,
  cursorChar: " <i class=\"fa-solid fa-heart fs-2\"></i> "
};

const typed = new Typed(".js-title", options);

const options1 = {
  strings: ["<span class=\"text-success-800 d-block\">Contribuer au</span><span class=\"text-primary-800 d-block\">Bien vieillir</span><span class=\"\">en </span><span class=\"text-warning-300\">Afrique</span>"],
  typeSpeed: 40,
  loop: true,
  loopCount: 10,
  backSpeed: 50,
  backDelay: 5000,
  showCursor: false
};

const typed1 = new Typed(".js-vision", options1);

/* eslint-enable no-unused-vars */
