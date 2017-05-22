/*$(function() {
		$( "input:submit", ".demo" ).button();
		$( ".demo" ).click(function() { return false; });
	});
*/
//Aquí comenzamos creando un plugin
jQuery.fn.LlenarLimpiarCampos = function(){
	this.each(function(){
		$(".nombre").attr("value","Introduzca su nombre");
		$(".nombre").focus(function(){
			if($(".nombre").attr("value")=="Introduzca su nombre"){
			$(".nombre").attr("value","");		
			}
		});
		$(".nombre").blur(function(){
			if($(".nombre").attr("value")==""){
		   $(".nombre").attr("value","Introduzca su nombre");		
			}
		});
	
		$(".correo").attr("value","Introduzca su email");
		$(".correo").focus(function(){
			if($(".correo").attr("value")=="Introduzca su email"){
			$(".correo").attr("value","");		
			}
		});
		$(".correo").blur(function(){
			if($(".correo").attr("value")==""){
		   $(".correo").attr("value","Introduzca su email");		
			}
		});
			$(".fecha").attr("value","Introduzca su fecha de nacimiento");
		$(".fecha").focus(function(){
			if($(".fecha").attr("value")=="Introduzca su fecha de nacimiento"){
			$(".fecha").attr("value","");		
			}
		});
		$(".fecha").blur(function(){
			if($(".fecha").attr("value")==""){
		   $(".fecha").attr("value","Introduzca su fecha de nacimiento");		
			}
		});


			$(".link").attr("value","Introduzca un link a la imagen");
		$(".link").focus(function(){
			if($(".link").attr("value")=="Introduzca un link a la imagen"){
			$(".link").attr("value","");		
			}
		});
		$(".link").blur(function(){
			if($(".link").attr("value")==""){
		   $(".link").attr("value","Introduzca un link a la imagen");		
			}
		});
		
			$(".imgnombre").attr("value","Introduzca un nombre a la imagen");
		$(".imgnombre").focus(function(){
			if($(".imgnombre").attr("value")=="Introduzca un nombre a la imagen"){
			$(".imgnombre").attr("value","");		
			}
		});
		$(".imgnombre").blur(function(){
			if($(".imgnombre").attr("value")==""){
		   $(".imgnombre").attr("value","Introduzca un nombre a la imagen");		
			}
		});

			$(".descr").attr("value","Introduzca una descripcion a la imagen");
		$(".descr").focus(function(){
			if($(".descr").attr("value")=="Introduzca una descripcion a la imagen"){
			$(".descr").attr("value","");		
			}
		});
		$(".descr").blur(function(){
			if($(".descr").attr("value")==""){
		   $(".descr").attr("value","Introduzca una descripcion a la imagen");		
			}
		});
		});
	return this;
};

$(document).ready(function () {
	$(this).LlenarLimpiarCampos();
	
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
   var datereg = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
    $(".boton").click(function(){
    	$(".error").remove();
		if( $(".nombre").val() == "" || $(".nombre").val() == "Introduzca su nombre"){
			$(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
			return false;
		}else if($(".nombre").val().length < 2){
			$(".nombre").focus().after("<span class='error'>Mínimo 2 carácteres para el nombre</span>");
			return false;
		}else if( $(".correo").val() == "" ||  !emailreg.test($(".correo").val()) || $(".correo").val() == "Introduzca su email"){
			$(".correo").focus().after("<span class='error'>Ingrese un email correcto</span>");
			return false;
		}else if( $(".fecha").val() == "" ||  !datereg.test($(".fecha").val()) || $(".fecha").val() == "Introduzca su fecha de nacimiento"){
			$(".fecha").focus().after("<span class='error'>Escoje una fecha</span>");
			return false;
		}else if( $(".link").val() == "" || $(".link").val() == "Introduzca un link a la imagen"){
			$(".link").focus().after("<span class='error'>Inserta un link</span>");
			return false;
		}else if( $(".imgnombre").val() == "" || $(".imgnombre").val() == "Introduzca un nombre a la imagen"){
			$(".imgnombre").focus().after("<span class='error'>Inserta un nombre de imagen</span>");
			return false;
		}else if( $(".descr").val() == "" || $(".descr").val() == "Introduzca una descripcion a la imagen"){
			$(".descr").focus().after("<span class='error'>Inserta una descripcion</span>");
			return false;
		}
	});

	//realizamos funciones para que sea más práctico nuestro formulario
	$(".nombre, .apellidos, .correo, .fecha, .link, .imgnombre, .descr").keyup(function(){
		if ( $(this).val() != "" ){
			$(".error").fadeOut();
			return false;
		}
	});
	
	$(".nombre").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});
	
	$(".apellidos").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});
		$(".correo").keyup(function(){
		if ( $(this).val() != "" && emailreg.test($(this).val())){
			$(".error").fadeOut();
			return false;
		}
	});
		$(".fecha").keyup(function(){
		if ( $(this).val() != "" && datereg.test($(this).val())){
			$(".error").fadeOut();
			return false;
		}
	});
		$(".link").keyup(function(){
		if ($(this).val().length >= 5){
			$(".error").fadeOut();
			return false;
		}
	});
		$(".imgnombre").keyup(function(){
		if ($(this).val().length >= 5){
			$(".error").fadeOut();
			return false;
		}
	});
		$(".descr").keyup(function(){
		if ($(this).val().length >= 5){
			$(".error").fadeOut();
			return false;
		}
	});
});
