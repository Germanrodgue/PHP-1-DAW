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
		
		
		
//print_r($_SESSION['fechaasd']);
	//	die();
		require_once("DAO.php");
		
		$daouser = new DAO();
		$rdo = $daouser->nuevo_user($user);
		if($rdo){
			echo $_SESSION['msje'];
		}else{
			echo 'error';
		}
		
		//$rdo = $nuevo->list_fetch_assoc_comentario();
		//echo $rdo;
		echo "<br>";
	?>
	<a href="index.php">Volver</a>
</body>
</html>
