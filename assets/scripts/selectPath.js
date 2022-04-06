let country = document.querySelector("#list");

if (country) {
  country.addEventListener("click", function () {
    if (this.value == 0) {
      return
    }else window.location.pathname = "/country/" + this.value;
  });
}