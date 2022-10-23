import $ from "jquery";
// Animation permettant de deplier les boutons de connexion et d'inscription
$(document).ready(function () {
  /* initialisation des variables */
  const indexButton = $("#js-login-button");
  $(indexButton).on("click", function () { 
    //e.preventDefault();
    console.log("remove");
    //$(".js-login-button").toggleClass("d-none");
    $(".js-login-button").fadeToggle();
  });
});