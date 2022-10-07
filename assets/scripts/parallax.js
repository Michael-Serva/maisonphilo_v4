import $ from "jquery";

$(document).on("ready", function () {
  const parallax = $(".js-parallax");

  $(window).on("scroll", function () {
    // console.log(window.scrollY);
    parallax.css("background-position-y", window.scrollY / -2 + "px");
  });
});
