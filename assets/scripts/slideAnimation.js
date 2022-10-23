import $ from "jquery";
// fade sliding animation in section engagement
$(function () {
  for (let i = 1; i <= 3; i++) {
    $(`.show${i}`).on("click", function (e) {
      e.preventDefault();
      $(`#show${i}`).slideToggle();
      $(`.hide${i}`).slideToggle();
    });
  }
});