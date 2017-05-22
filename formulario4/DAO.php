<?php
   
     include ("connect.php");
	class DAO{
		function nuevo_user($user){

			 $sql = "INSERT INTO usuarios(nombre, email, fecha, tipo, link) VALUES ('$user[nombre]' , '$user[correo]',  '$user[fecha]', '$user[tipo]', '$user[link]')";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		
	}