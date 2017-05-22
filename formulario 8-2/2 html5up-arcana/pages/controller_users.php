<?php
	include("utils/functions.inc.php"); 
	include("classes/Browser.class.php");

	if (isset($_POST['Enviar'])) {
		$result = validate_user();
		//debug($result);
		if ($result['resultado']) {
			$arrArgument = array(
							'nombre' => $result['datos']['nombre'],
							'email' => strtoupper($result['datos']['correo'])
						);
			//debug($arrArgument);
			$mensaje="Su registro se ha efectuado correctamente para finalizar compruebe que ha recibido un correo de validacion y siga las instrucciones del correo";
            
			//redirigir a otra p�gina con los datos de $arrArgument y $mensaje
			$_SESSION['user']=$arrArgument;
			$_SESSION['msje']=$mensaje;
			//header("Location:index.php?page=results_user1");
			$callback="index.php?page=results_user1";
			Browser::redirect($callback);
			die;
			
			//En el caso de enviar al usuario un correo y finalizar la aplicaci�n
			//include "results_user.php";
            //die;
		}else{
			$error = $result['error'];
			//debug($error);
		}
	}

	include 'form_users.php';
