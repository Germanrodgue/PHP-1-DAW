<?php

 function isImage($file)
  {
  		 $size = getimagesize($file);
   return (strtolower(substr($size['mime'], 0, 5)) == 'image' ? $file : false); 
        	
}
 
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
			'fecha' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/')
			),
			'link' => array(
				'filter'=>FILTER_CALLBACK,
				'options'=>'isImage'
			),
			'imgnombre' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			'descr' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^[a-zA-Z ]{7,20}$/')
			),
			'tipo' => array(
				
			),
			'location' => array(
				
			),
			
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		

		/*if(isset($resultado['link'])){
			
			$link = isImage($resultado['link']);
		}*/

		if(!$resultado['nombre']){
			$error='Nombre debe tener de 3 a 30 caracteres';
		}elseif(!$resultado['correo']){
			$error='El email debe contener de 5 a 50 caracteres y debe ser un email valido';
		}elseif(!$resultado['fecha']){
			$error='La fecha debe cumplir el formato dd/mm/yyyy';
		}elseif(!$resultado['link']){
			$error='El link debe ser correcto';
		}elseif(!$resultado['imgnombre']){
			$error='El nombre de la imagen debe ser correcto';
		}elseif(!$resultado['tipo']){
			$error='El tipo debe ser correcto';
		}elseif(!$resultado['descr']){
			$error='La descripcion tiene que tener entre 5 y 20 caracteres';
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
