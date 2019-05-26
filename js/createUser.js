$(document).ready(function () {
   // $('#body').load('http://localhost/integro/views/login.html');


   $('#form').submit(function(e){
        e.preventDefault();

        var usuario = $('input[name="nickname"]');
        $.ajax({
            type:'POST',
            url:'http://localhost/integro/validarUsuario.php',
            data: usuario,
            success: function(response){
                console.log(response.data());
            }
        });

    return false;
   });
})