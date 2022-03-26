document
  .querySelector("#floatingSelect")
  .addEventListener("change", function () {
    if (this.value == "1") {
      console.log("Yes selected");
      window.location.pathname = "/country";
    } else {
      console.log("No selected");
    }
  });