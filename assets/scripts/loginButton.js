import $ from "jquery";

$(document).ready(function () {

/* initialisation des variables */
const indexButton = $("#js-login-button");
const menuButton = $(".js-login-button");
    $(indexButton).on("click", function (e) { 
        e.preventDefault();
        console.log("remove");
        //$(".js-login-button").toggleClass("d-none");
        $(".js-login-button").fadeToggle();
    });
});