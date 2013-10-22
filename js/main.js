$(document).ready(function() {
  $('.jump-eventbrite').on('click',function(e){
    $('#tickets').focus();
    e.preventDefault();
    e.stopPropagation();
  });
});