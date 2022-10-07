import "./styles/assistance.scss";

import "./styles/country.scss";
import "./components/toast.js";

import $ from "jquery";

$(function () {
  $(".js-assistance").on("click", function (e) { 
    e.preventDefault();
    $(this).next().slideToggle("slow");
  });

  $(".showDescription").slideUp(0);

});