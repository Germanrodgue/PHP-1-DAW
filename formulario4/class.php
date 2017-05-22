<?php
	class Conectar{
		public static function con(){
			$host = getenv('127.0.0.1');  
    		$user = "root";                     //Your Cloud 9 username
    		//$user = getenv('C9_USER');
    		$pass = "";                             //Remember, there is NO password!
    		$db = "comentarios";                      //Your database name you want to connect to
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="usuarios";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}
	class Comentarios{
		function nuevo_comentario($nombre, $apellidos, $correo, $fecha, $tipo, $link){

			 $sql = "INSERT INTO usuarios(nombre, apellidos, email, fecha, tipo, link) VALUES ('$nombre', '$apellidos' , '$correo',  '$fecha', '$tipo', '$link')";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		function list_fetch_assoc_comentario(){
			$cad="";
			$sql = "select * from usuarios";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
        		$cad .= "<br>Nombre: " . $row['nombre']. "<br>" . " Apellidos: " . $row['apellidos']. "<br>";
        		$cad .= "Email: " . $row['email']. "<br>" . " Fecha: " . $row['fecha']. "<br>";
        		$cad .= "tipo: " . $row['tipo']. "<br>" . " Link: " . $row['link']. "<br>";
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
		function list_fetch_array_comentario(){
			$cad="";
			$sql = "select * from usuarios";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_array($result)) {
        		$cad .= "Nombre: " . $row[1]. "<br>";
        		
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
	}
?>
