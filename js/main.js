$(document).ready(function() {
  checkMenuSize();
  $('.fa-bars').click(function() {
    $('.nav').toggle();
  });
  
  $('.wrapper').click(function(e) {
    if (e.target != '.nav' && $('.fa-bars').is(':visible')) {
      $('.nav').hide();
    }
  });
  
  $('.nav a').each(function(index) {
    var a_href = this.href.trim(),
        first_dir = window.location.pathname.split('/')[1];

    if (first_dir == 'category') {
      first_dir += '/' + window.location.pathname.split('/')[2];
    }

    var url = window.location.protocol + "//" + window.location.host + "/" + first_dir;

    if (a_href == window.location ||
        a_href == url || 
        a_href == url + "/" || 
        (this.pathname == "/" && first_dir == 'about')) {
        $(this).addClass('selected');
      }
  });

  $(window).resize(checkMenuSize);
});

function checkMenuSize() {
  if ($('.fa-bars').css('display') == 'block'){
    $('.nav').hide();
  } else {
    $('.nav').show();
  }
}
