<?php
   
     include ("includes/connect.php");
	class DAO{
		function nuevo_user($user){

			 $sql = "INSERT INTO usuarios(nombre, email, fecha, tipo, link) VALUES ('$user[nombre]' , '$user[email]', '$user[fecha]', '$user[tipo]', '$user[link]')";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		function select_all_user(){
			$sql = "SELECT * FROM usuarios ORDER BY id ASC";
			
			$conexion =  Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}
		function select_count(){
			$sql = "SELECT COUNT(*) FROM usuarios";
			
			$conexion =  Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}
		function select_user($user){
			$sql = "SELECT * FROM usuarios WHERE id='$user'";
			
			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            Conectar::close($conexion);
            return $res;
		}
		function update_user($user){

			 $sql = "UPDATE usuarios SET nombre='$user[nombre]', email='$user[email]', fecha='$user[fecha]', tipo='$user[tipo]', link='$user[link]' WHERE id='$user[id]'";  
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		function delete_user($user){
			$sql = "DELETE FROM usuarios WHERE id='$user'";
			
			$conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
		}
	}