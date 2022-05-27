import $ from "jquery";
$(document).ready(function () {
  const country = document.querySelector("#js-list");



  /* reintialisation de la valeur de l input select */
  $("select").click(function () {
    console.log("test");
    $("select").prop("selectedIndex", 0);
  });
  $("js-country").click(function (e) { 
    e.preventDefault();
    if (this.value != 0) {
      console.log('yo');
      window.location.pathname = "/country/" + this.value;
    }
  });

});

/* if (country) {
  country.addEventListener("change", function () {
    if (this.value != 0) {
      console.log('yo');
      window.location.pathname = "/country/" + this.value;
    }
  });
} */

/* if (country) {
  country.click(function (e) {
    e.preventDefault();
    window.location.pathname = "/country/" + this.value;
  });
}

if (country) {
  country.addEventListener("change", function () {
    if (this.value != 0) {
      window.location.pathname = "/country/" + this.value;
    }
  });
}
 */
