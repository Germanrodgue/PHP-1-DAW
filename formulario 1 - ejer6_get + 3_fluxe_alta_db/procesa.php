<?php
		require_once("class.php");
		
		session_start();
//print_r($_SESSION['fechaasd']);
	//	die();
		
		$nuevo = new Comentarios();
		$rdo = $nuevo->nuevo_comentario($_SESSION['nombre'], $_SESSION['apellidos'], $_SESSION['correo'],  $_SESSION['fecha'], $_SESSION['tipo'], $_SESSION['link']);
		print_r($rdo);
		echo "<br>";
		
		$rdo = $nuevo->list_fetch_assoc_comentario();
		echo $rdo;
		echo "<br>";
		
		//$rdo = $nuevo->list_fetch_array_comentario();
		//echo $rdo;
?>