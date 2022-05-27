$(function () {
  $("btn-light").on("mouseover",function () { 
    $(this).toggleClass("bg-success");
    alert('ok')
  });
});