<?php


	function validate_login(){
		$error='';
		$filtro = array(
			'usuario' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		

		if(!$resultado['usuario']){
			$error='Nombre debe tener de 3 a 30 caracteres';
		}else{
			
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
