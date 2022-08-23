import $ from "jquery";

import "./styles/survey.scss";

/* initialization of variables */

let specialistsId = $("#survey_specialists___name___professionals");
let specialists = $(".specialists");
let specialistsValue = $("select#survey_specialists___name___professionals");

let aids = [];
let aidsId = [
  $("#survey_aids___name___publicAssistanceFinancialSupport"),
  $("#survey_aids___name___publicDevicesToHelpPeopleStayAtHome"),
  $("#survey_aids___name___publicPlacementDevices"),
];
let aidsValue = [
  $("select#survey_aids___name___publicAssistanceFinancialSupport"),
  $("select#survey_aids___name___publicDevicesToHelpPeopleStayAtHome"),
  $("select#survey_aids___name___publicPlacementDevices"),
];

function showInput(id, input, value) {
  id.on("change", function (e) {
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
for (let index = 0; index <= 2; index++) {
  showInput(aidsId[index], $(".aids" + index), aidsValue[index]);
  console.log(".aids" + index);
}
