
$(document).scroll(function() {
  if( $(this).scrollTop() > 50 ) {
    $('.fullnav').addClass("sticky");
  } else {
  $('.fullnav').removeClass("sticky");
  }
});