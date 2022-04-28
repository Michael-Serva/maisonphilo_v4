let country = document.querySelector("#js-list");

if (country) {
  country.addEventListener("change", function () {
    console.log("yo");
    window.location.pathname = "/country/" + this.value;
  });
}
