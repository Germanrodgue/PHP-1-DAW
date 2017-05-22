<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<p>Datos introducidos:</p>
<?php

echo "Nombre: "; print_r($_POST['nombre']);
echo "<br>Apellidos: "; print_r($_POST['apellidos']);
echo "<br>Correo: "; print_r($_POST['correo']);
echo "<br>Estado: "; print_r($_POST['estado']);
echo "<br>Hijos: "; print_r($_POST['hijos']);
echo "<br>Fecha1: "; print_r($_POST['fecha1']);
echo "<br>Fecha2: "; print_r($_POST['fecha2']);
	/*foreach ($_GET as $indice => $valor) 
		echo "$indice: $valor<br>";
	*/
	echo "<br><br>GUSTOS:<br>";
	$gustos = $_POST["gustos"];
	foreach ($gustos as $indice => $valor) 
		echo "$valor<br>";
session_start();

  	$_SESSION = $_POST; 
	$url = "procesa.php";
        die('<script>window.location.href="'.$url.'";</script>');




?>
</body>
</html>
