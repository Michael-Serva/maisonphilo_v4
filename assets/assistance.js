import "./styles/assistance.scss";

import "./styles/country.scss";

import "./scripts/selectPath";

import $ from "jquery";

$(function () {
  $(".hospital").on("click", function (e) { 
    e.preventDefault();
    $(this).next().slideToggle();
  });

  $(".showDescription").slideUp(0);

});