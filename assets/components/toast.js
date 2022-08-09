import { Toast } from "bootstrap/dist/js/bootstrap";
import $ from "jquery";

    const toast = $(".toast");
    
      $(".btn-primary").on("click", function (e) {
      e.preventDefault();
    
      new Toast(toast).show();
    });
