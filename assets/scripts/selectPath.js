import $ from "jquery";
const country = document.querySelector("#js-list");

if (country) {
  country.addEventListener("change", function () {
    if (this.value != 0) {
      console.log('yo');
      window.location.pathname = "/country/" + this.value;
    }
  });
}


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
/* reintialisation de la valeur de l input select */
$("select").click(function () {
  console.log("test");
  $("select").prop("selectedIndex", 0);
});
