<?php
	include("functions.inc.php");
	include("validate_users.php");
	session_start();

	$error = false;
	$error_nombre = false;
	$error_correo = false;
	$error_fecha = false;
	$error_link = false;
	$error_nombre_img = false;
	$error_descr_img = false;
	if (isset($_POST['alta'])) {
		$error_nombre = EsRequerido($_POST['nombre']);
		if($error_nombre){ 
			$error_nombre = "El nombre no puede estar en blanco";
			$error = true;
		}
		$error_correo = EsRequerido($_POST['correo']);
		if($error_correo){ 
			$error_correo = "El correo no puede estar en blanco";
			$error = true;
		}
		$error_fecha = EsRequerido($_POST['fecha']);
		if($error_fecha){ 
			$error_fecha = "La fecha no puede estar en blanco";
			$error = true;
		}
		$error_link = EsRequerido($_POST['link']);
		if($error_link){ 
			$error_link = "El link no puede estar en blanco";
			$error = true;
		}
		$error_nombre_img = EsRequerido($_POST['imgnombre']);
		if($error_nombre_img){ 
			$error_nombre_img = "El nombre no puede estar en blanco";
			$error = true;
		}
		$error_descr_img = EsRequerido($_POST['descr']);
		if($error_descr_img){ 
			$error_descr_img = "La descripcion no puede estar en blanco";
			$error = true;
		}
		if (!$error) {
			//debug($_POST);
			//exit();
			
			$mensaje="Su registro se ha efectuado correctamente para finalizar compruebe que ha recibido un correo de validacion y siga las instrucciones del correo";
			$_SESSION['user']=$_POST;
			$_SESSION['msje']=$mensaje;
			$callback = 'results_users.php';

			//header("Location:$callback");
			die('<script>top.location.href="'.$callback .'";</script>');
		}
	}
	
	include 'ejer1GET.php';