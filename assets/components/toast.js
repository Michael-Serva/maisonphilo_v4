import bootstrap from "bootstrap/dist/js/bootstrap.bundle.js";

var toastTrigger = document.getElementById("liveToastBtn");
var notice = document.getElementById("#notice");
var toastLiveExample = document.getElementById("liveToast");

if (toastTrigger) {
  toastTrigger.addEventListener("click", function () {
    var toast = new bootstrap.Toast(toastLiveExample);
    toast.show();
  });
}

if (notice) {
  window.onload = (event) => {
  let myAlert = document.querySelectorAll('.toast')[0];
  if (myAlert) {
    let bsAlert = new bootstrap.Toast(myAlert);
    bsAlert.show();
  }
}
 
};
            