<?php
	function EsRequerido($texto){
		if($texto === "")
			return true;
		else 
			return false;
	}
	
	function EsTexto($texto){
		$reg="^[A-Za-z]+[A-Za-z0-9]*$";
		return ereg($reg,$texto);
	}
	
	function EsNumerico($texto){ 
		$reg = "^[0-9]+$";
		return ereg($reg, $texto); 
	}


function Fecha($texto){ 
		  $reg = "/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/";
		return ereg($reg, $texto); 
	}