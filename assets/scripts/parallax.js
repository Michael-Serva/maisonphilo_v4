import $ from "jquery";

$(document).ready(function () {
  let parallax = $(".js-parallax");

  $(window).scroll(function () {
    //console.log(window.scrollY);
    parallax.css("background-position-y", window.scrollY / -2 + "px");

    if (
      window.scrollY >= $("#services").offset().top &&
      window.scrollY < $("#vision").offset().top
    ) {
      $("li .services").addClass("active");
    } else {
      $("li .services").removeClass("active");
    }

    if (
      window.scrollY >= $("#vision").offset().top &&
      window.scrollY < $("#about").offset().top
    ) {
      $("li .vision").addClass("active");
    } else {
      $("li .vision").removeClass("active");
    }

    if (
      window.scrollY >= $("#about").offset().top &&
      window.scrollY < $("#commit").offset().top
    ) {
      $("li .about").addClass("active");
    } else {
      $("li .about").removeClass("active");
    }

    if (
      window.scrollY >= $("#commit").offset().top 
    ) {
      $("li .commit").addClass("active");
    } else {
      $("li .commit").removeClass("active");
    }
  });
});
