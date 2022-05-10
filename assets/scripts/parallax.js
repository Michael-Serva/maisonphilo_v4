import $ from "jquery";

$(document).ready(function () {
  const parallax = $(".js-parallax");

  $(window).scroll(function () {
    // console.log(window.scrollY);
    parallax.css("background-position-y", window.scrollY / -2 + "px");
  });
});
