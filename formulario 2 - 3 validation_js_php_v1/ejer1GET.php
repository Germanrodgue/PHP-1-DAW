<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link rel="stylesheet" href="estilos2.css" type="text/css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
  <script type="text/javascript" src="validate_users.js"></script>
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


<p align="center">Introduzca sus datos personales:</p>

 <div align="center">

  <form method="post" name="formusers" id="formusers" class="topBefore" action="index.php">
   

     <input  type="text" name="nombre" class="nombre" value=""/> 

      <br>
     <input name="apellidos" type="text" class="apellidos"  value=""/> 
     <br>

     <input name="correo" type="text" class="correo" value=""/> 

      <br>

       <input id="demo1" type="text" name="fecha" class="fecha" value="" /> 

      <br>
     <input name="link" type="text" class="link" value="" /> 
           <br>


<div class="checkbox1">
<h4> Tipo de fotografía </h4>

            Sin categoria <input type="radio" name="tipo" value="Retrato" class="checkbox1" checked>
           Retrato <input type="radio" name="tipo" value="Retrato" class="checkbox1" >
           Paisaje  <input type="radio" name="tipo" value="Paisaje" class="checkbox1">
           Aerea <input type="radio" name="tipo" value="Aerea"  class="checkbox1"> 

 </div>
<br>
 

        <input name="alta" type="submit" value="Alta" class="boton"/>

    
  </form>
  </div>

</body>
</html>