<?php
	function validate_user(){
		$error='';
		$filtro = array(
			'nombre' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
			'correo' => array(
				'filter'=>FILTER_CALLBACK,
				'options'=>'validatemail'
			),
			
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['nombre']){
			$error='Nombre debe tener de 3 a 30 caracteres';
		}elseif(!$resultado['correo']){
			$error='El email debe contener de 5 a 50 caracteres y debe ser un email valido';
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	function validatemail($correo){
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
			if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
				if(filter_var($correo, FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=> '/^.{5,50}$/')))){
					return $correo;
				}
			}
			return false;
	}
	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
