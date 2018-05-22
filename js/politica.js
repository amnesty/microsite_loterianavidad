$(document).ready(function() {
  $("input[name=email]").blur(function(){
    if (isEmail($("input[name=email]").val()) == true)
    {
        var params = {"email" : $("input[name=email]").val()};
        $.ajax({
               data:  params,
               url:   'includes/politica.php',
               type:  'post',
               dataType: 'json',
               beforeSend: function () {
                       //$("#resultado").html("Procesando, espere por favor...");
               },
               success:  function (response) {
                       if (response.member_id == null)
                       {
                          $("input[name=politica]").prop('checked',false);
                          $('#check_privacidad').show();
                       }
               }
        });
   }
  });
});//.document ready

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
