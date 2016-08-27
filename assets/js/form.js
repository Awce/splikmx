(function($){
  $(function(){
    $().ajaxStart(function() {
      $('#loading').show();
      $('#result').hide();
    }).ajaxStop(function() {
      $('#loading').hide();
      $('#result').fadeIn('slow');
    });
    $('#form, #fat, #contacto').submit(function() {
       $.ajax({
           type: 'POST',
           url: $(this).attr('action'),
           data: $(this).serialize(),
           // Mostramos un mensaje con la respuesta de PHP
           success: function(data) {
               $('#result').html(data);
           }
       })
       return false;
   });
  });
})(jQuery);
