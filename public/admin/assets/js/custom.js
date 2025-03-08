
// password show/hide
$(document).ready(function () {

    $(".eye").click(function () {
      var input = $("#" + $(this).attr("data-target"));
  
      if(input.attr("type") === 'password'){
        input.attr("type", "text");
        $(this).attr("src", $(this).attr("data-hidden"));
      }
      else{ 
        input.attr("type", "password");
        $(this).attr("src", $(this).attr("data-visible"));
      }
  
    });
  });