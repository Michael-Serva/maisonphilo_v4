import "./styles/assistance.scss";

import "./styles/country.scss";

import "./scripts/selectPath";

import $ from "jquery";

$(document).ready(function () {
  $(".hospital").on("click", function (e) { 
    e.preventDefault();
    $(this).toggleClass("bg-secondary text-light");
    $(".showDescription").toggleClass("d-none");
  });
});