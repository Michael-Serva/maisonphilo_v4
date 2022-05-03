/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

// start the Stimulus application
import "./bootstrap";

// app.js

const $ = require("jquery");
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require("bootstrap");
import "@fortawesome/fontawesome-free/css/all.css";
import "@fortawesome/fontawesome-free/js/all.js";
import "./scripts/izmir";
import "./scripts/aos";
import "./scripts/parallax";
import "./styles/app.scss";

for (let i = 1; i <= 3; i++) {
  $(document).ready(function () {
    $(`.show${i}`).click(function (e) {
      e.preventDefault();
      $(`#show${i}`).toggleClass("d-none");
      $(`.hide${i}`).toggleClass("d-none");
    });
  });
}
