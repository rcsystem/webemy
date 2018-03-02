
	$(document).ready( function() {
		$('#boton_enviar').click(function(){
			$( "#boton_enviar" ).prop( "disabled", true );
			valido = true;
			email 	  = $('#user').val();
			password  = $('#password').val();
			mensaje_error   = '';
			if( email == ''){
				mensaje_error = 'El E-mail no puede ir vacío' ;
				valido = false;
			} 
			if( !email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
				mensaje_error = ( mensaje_error == '') ? 'No es un correo valido' : mensaje_error+' - '+'No es un correo valido';
				valido = false;
			}
			if( password == '' ){
				mensaje_error = ( mensaje_error == '') ? 'El password debe tener mas de 5 caracteres' : mensaje_error+' - '+'El password debe tener mas de 5 caracteres';
				valido = false;
			}
			if(mensaje_error != ''){
				$("#mostrar_mensaje_error").html(mensaje_error);
				$("#mostrar_mensaje_error").css('display','block');
				$( "#boton_enviar" ).prop( "disabled", false );
			}
			
			if( valido == true ){
				$.post( "index.php/usuario/login", { email: email, password: password })
				.done(function( data ) {
				    if(data.status == false){
				    	mensaje_error = 'Los datos son incorrectos';
				    	$("#mostrar_mensaje_error").html(mensaje_error);
						$("#mostrar_mensaje_error").css('display','block');
						$( "#boton_enviar" ).prop( "disabled", false );
				    }else{
				    	alert('El usuario '+data.usuario.nombre+' '+data.usuario.apellidos+' es correcto y se ha loggeado');
				    	window.location.href = "index.php/Usuario/contactos/";
				    }
				});

			}

		});
	});
		