let country = document.querySelector("#js-list");

if (country) {
  country.addEventListener("change", function () {
    if (this.value == 0) {
      return
    }else window.location.pathname = "/country/" + this.value;
  });
}
