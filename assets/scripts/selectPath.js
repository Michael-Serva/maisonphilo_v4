let country = document.querySelector("#js-list");

if (country) {
  country.addEventListener("click", function () {
    if (this.value == 0) {
      return
    }else console.log("yo"); window.location.pathname = "/country/" + this.value;
  });
}
