<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link rel="stylesheet" href="estilos2.css" type="text/css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
  <script type="text/javascript" src="funciones.js"></script>
  <script type="text/javascript">
  $(function() {
    $('#demo1').datepicker({
      dateFormat: 'yy/mm/dd', 
      changeMonth: true, 
      changeYear: true, 
      yearRange: '0:+2',
      minDate: 0,
      
    });
    
  });
  </script>
  </head>
<body>
<?php
  session_start();
  if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
      $error = array(); // declaramos un array para almacenar los errores
      if($_POST['nombre'] == ''){
        $error[1] = '<span class="error">Ingrese su nombre</span>';
      }else if(strlen($_POST['nombre']) < 2){
        $error[1] = '<span class="error">Mínimo 2 carácteres para el nombre</span>';
      }else if($_POST['correo'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['correo'])){
        $error[2] = '<span class="error">Ingrese un email correcto</span>';
      }else if($_POST['apellidos'] == ''){
        $error[3] = '<span class="error">Ingrese sus apellidos</span>';
      }else if($_POST['fecha'] == ''){
        $error[4] = '<span class="error">Inserta su fecha de nacimiento</span>';
      }else if($_POST['link'] == ''){
        $error[5] = '<span class="error">Inserta un link a la imagen</span>';
      }else{

        $_SESSION = $_POST; 
        //print_r($_SESSION);
        //die();
        $url = "procesa.php";
        die('<script>window.location.href="'.$url.'";</script>');
    }
  }
  ?>

<p align="center">Introduzca sus datos personales:</p>



<div align="center">
<form name="formulario" method="POST" action="" class="topBefore">

     <input  type="text" name="nombre" class="nombre" value="<?php @$_POST['nombre'] ?>" > <?php echo @$error[1] ?>

      <br>
     <input name="apellidos" type="text" class="apellidos"  value="<?php @$_POST['apellidos'] ?>" > <?php echo @$error[3] ?>
     <br>

     <input name="correo" type="text" class="correo" value="<?php @$_POST['correo'] ?>" > <?php echo @$error[2] ?>

      <br>

       <input id="demo1" type="text" name="fecha" class="fecha" value="<?php @$_POST['fecha'] ?>" > <?php echo @$error[4] ?>

      <br>
     <input name="link" type="text" class="link" value="<?php @$_POST['link'] ?>" > <?php echo @$error[5] ?>
           <br>


<div class="checkbox1">
<h4> Tipo de fotografía </h4>
            Sin categoria <input type="radio" name="tipo" value="Retrato" class="checkbox1" checked>
           Retrato <input type="radio" name="tipo" value="Retrato" class="checkbox1" >
           Paisaje  <input type="radio" name="tipo" value="Paisaje" class="checkbox1">
           Aerea <input type="radio" name="tipo" value="Aerea"  class="checkbox1"> 
 </div>
<br>
 


     <input type="hidden" name="grabar" value="si" />
     <input name="boton" type="submit" value="Enviar" class="boton">
        


  

</form>
    </div>


</body>
</html>