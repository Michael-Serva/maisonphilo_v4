import $ from "jquery";

import "./styles/survey.scss";

/* initialization of variables */

/* specialists */
let specialistsId = $("#survey_specialists___name___professionals");
let specialists = $(".specialists");
let specialistsValue = $("select#survey_specialists___name___professionals");

/* aids */
let aidsId = [
  $("#survey_aids___name___publicAssistanceFinancialSupport"),
  $("#survey_aids___name___publicDevicesToHelpPeopleStayAtHome"),
  $("#survey_aids___name___publicPlacementDevices"),
  $("#survey_aids___name___privateSystem"),
  $("#survey_aids___name___ONGFondation")
];
let aidsValue = [
  $("select#survey_aids___name___publicAssistanceFinancialSupport"),
  $("select#survey_aids___name___publicDevicesToHelpPeopleStayAtHome"),
  $("select#survey_aids___name___publicPlacementDevices"),
  $("select#survey_aids___name___privateSystem"),
  $("select#survey_aids___name___ONGFondation")
];

/* clothes */
let clothesId = $("#survey_clothes___name___market");

let clothes = $(".clothes");

let ClothesValue = $("select#survey_clothes___name___market");

function showInput(id, input, value) {
  id.on("change", function () {
    console.log(value.val());
    if (value.val() == 0) {
      input.removeClass("d-none");
      input.addClass("mb-3");
    } else {
      input.addClass("d-none");
    }
  });
}

showInput(specialistsId, specialists, specialistsValue);
for (let index = 0; index < aidsId.length; index++) {
  showInput(aidsId[index], $(".aids" + index), aidsValue[index]);
}
showInput(clothesId, clothes, ClothesValue);
