$(document).ready(function() {

  $('.feedback').click(function() {
    $('form').css('display', 'block');
    $('.blackout').css('display', 'block');
  });

  $('#form').submit(function() {
    $('#fountainG').css('display', 'block');
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize()
    }).done(function() {
      $('form').css('display', 'none');
      $('#fountainG').css('display', 'none');
      $('.accepted').css('display', 'block');
      setTimeout(function() {
        $('form').css('display', 'none');
        $('.blackout').css('display', 'none');
        $('.accepted').css('display', 'none');
      }, 3000);
    });
    return false;
  });

  $('.closed').click(function() {
    $('form').css('display', 'none');
    $('.blackout').css('display', 'none');
    $('.accepted').css('display', 'none');
    $('#fountainG').css('display', 'none');
  });
});
