import "./styles/assistance.scss";

import "./styles/country.scss";

import "./scripts/selectPath";

import $ from "jquery";

$(document).ready(function () {
  $("#partner").click(function (e) { 
    e.preventDefault();
    e.$("#partner").toggleClass("bg-secondary text-light");
    e.$(".partnerShow").toggleClass("d-none");
        
  });
  $("#hospital").click(function (e) { 
    e.preventDefault();
    $("#hospital").toggleClass("bg-secondary text-light");
    $(".hospitalShow").toggleClass("d-none");
  });
});