<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<br><br><br><br>
	<?php
		include("functions.inc.php");
		session_start();
	
		echo $_SESSION['msje'];
		$user = $_SESSION['user'];
		debug($user);
		require_once("class.php");
		
		
//print_r($_SESSION['fechaasd']);
	//	die();
		
		$nuevo = new Comentarios();
		$rdo = $nuevo->nuevo_comentario($user['nombre'], $user['apellidos'], $user['correo'],  $user['fecha'], $user['tipo'], $user['link']);
		print_r($rdo);
		echo "<br>";
		
		$rdo = $nuevo->list_fetch_assoc_comentario();
		echo $rdo;
		echo "<br>";
	?>
	<a href="index.php">Volver</a>
</body>
</html>
