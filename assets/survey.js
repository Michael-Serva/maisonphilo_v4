import $ from "jquery";

let specialistsId = $("#survey_specialists___name___professionals");
let specialists = $(".specialists");
let value = $( "select#survey_specialists___name___professionals" );

specialistsId.on("change", function (e) {
    console.log(value.val()
    );
  if (value.val() == 0) {
    specialists.removeClass("d-none");
    specialists.addClass("mb-3");
  }else {
    specialists.addClass("d-none");
  }
});
