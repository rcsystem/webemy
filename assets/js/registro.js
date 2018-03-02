
 
        function Validar(user, pass)
        {
            $.ajax({
                url: "bd/emy_registro.php",
                type: "POST",
                data: "cliente="+cliente+"&nombre-empresa="+nombre-empresa+"&nombre-contacto="+nombre-contacto+"&apellido="+apellido+"&tel="+tel+"&email="+email+"&ciudad="+ciudad+"&usuario="+usuario+"&password="+password,
                success: function(resp){
                $('#resultado').html(resp)
                }       
            });
        }
        