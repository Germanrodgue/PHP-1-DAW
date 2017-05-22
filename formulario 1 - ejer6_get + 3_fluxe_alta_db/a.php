  
    <tr>
      <td>Estado civil </td>
      <td><select name="estado" id="estado">
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Divorciado">Divorciado</option>
        <option value="Viudo">Viudo</option>
      </select></td>
    </tr>
    <br>
    <tr>
      <td>N&uacute;mero hijos </td>
      <td>0 <input name="hijos" type="radio" value="0" checked>
       	1 <input name="hijos" type="radio" value="1">
        	2 <input name="hijos" type="radio" value="2">
        	3 <input name="hijos" type="radio" value="3"></td>
    </tr>
    <br>
    <tr>
      <td>Gustos</td>
      <td>Inform&aacute;tica <input type="checkbox" name="gustos[]" value="Informatica">
        	Buceo  <input type="checkbox" name="gustos[]" value="Buceo">
        	Magia <input type="checkbox" name="gustos[]" value="Magia">
        	Jazz   <input type="checkbox" name="gustos[]" value="Jazz"></td>
    </tr>

 
   <h2>Mostrar la fecha seleccionada en una alerta</h2>
    
  <p><label>Selecciona fecha:</label><input id="demo1" type="text" name="fecha1"></p>

  <h2>Guardar fecha mediante AJAX</h2>
  <p><label>Selecciona fecha:</label><input id="demo2" type="text" name="fecha2"><div id="result"></div></p>












  <script type="text/javascript" src="jqueryUI/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <link rel="stylesheet" href="estilos2.css" type="text/css" />
  <link rel="stylesheet" href="jqueryUI/css/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" />
  <script type="text/javascript" src="funciones.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>



   <div>
    <label>Tu Nombre:</label>
    <input type='text' name="nombre" class="nombre" value="<?php @$_POST['nombre'] ?>" ><?php echo @$error[1] ?>
    </div>

    <div>
    <label>Tus Apellidos:</label>
    <input type='text' name="apellidos" class="apellidos" value="<?php @$_POST['apellidos'] ?>" ><?php echo @$error[3] ?>
    </div>

   <div>
   <label>Tu Correo:</label>
   <input type='text' name="correo" class="correo" value="<?php @$_POST['correo'] ?>" ><?php echo @$error[2] ?>
   </div>

     <div class="demo"><input type='submit'  name="boton" class="boton" value='Envia Mensaje'></div>