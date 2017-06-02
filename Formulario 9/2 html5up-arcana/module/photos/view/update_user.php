<p align="center">Introduzca sus datos personales:</p>

 <div align="center" >

  <form method="post" name="formusers" id="formusers" class="topBefore" onsubmit="return validate_user();" action="index.php?page=controller_users&op=update">
   
    <?php
        if(isset($error)){
            print ("<BR><span CLASS='styerror'>" . "* ".$error . "</span><br/>");
        }?>
 <span id="e_nombre" class="styerror"></span>
     <input  type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $user['nombre'];?>" />
     
      <br>
      <span id="e_email" class="styerror"></span>
     <input name="correo" type="text" id="correo" class="correo" placeholder="Email" paceholder_ value="<?php echo $user['email'];?>" />
 
      <br>
      <span id="e_fecha" class="styerror"></span>
       <input id="demo1" type="text" name="fecha" class="fecha" placeholder="Fecha de nacimiento" readonly="readonly" value="<?php echo $user['fecha'];?>" /> 
       
      <br>

      <hr style="height: 0px; width: 99%; padding-top:0px; margin:30px;"/>

      <p align="center">Datos sobre la imagen:</p>

      <span id="e_link" class="styerror"></span>
     <input name="link" type="text" id="link" class="link" placeholder="Link" value="<?php echo $user['link'];?>"/> 
     
      <br>
      <span id="e_imgnombre" class="styerror"></span>
     <input name="imgnombre" type="text" id="imgnombre" placeholder="Imagen nombre" class="imgnombre" value="<?php echo $user['imgnombre'];?>"/> 
     
     <br>
     <span id="e_descr" class="styerror"></span>
      <input name="descr" type="text" id="descr" class="descr" placeholder="Descripcion" class="descr" value="<?php echo $user['Descripcion'];?>" /> 
     
     <br>
     <div class="checkbox1">
      <h4> Formato </h4>
       <?php
            if ($user['tipo']==="RAW"){
        ?>
           RAW <input type="radio" name="tipo" value="RAW" class="checkbox1" checked >
           JPEG  <input type="radio" name="tipo" value="JPEG" class="checkbox1">
           PNG <input type="radio" name="tipo" value="PNG"  class="checkbox1"> 
            <?php
                        } 
                        if ($user['tipo']==="JPEG"){
                    ?>
            RAW <input type="radio" name="tipo" value="RAW" class="checkbox1"  >
            JPEG  <input type="radio" name="tipo" value="JPEG" class="checkbox1" checked>
            PNG <input type="radio" name="tipo" value="PNG"  class="checkbox1"> 

            <?php
                        } 
                        if ($user['tipo']==="PNG"){
                    ?>
            RAW <input type="radio" name="tipo" value="RAW" class="checkbox1"  >
            JPEG  <input type="radio" name="tipo" value="JPEG" class="checkbox1" >
            PNG <input type="radio" name="tipo" value="PNG"  class="checkbox1" checked> 

             <?php
                        } 
                     
                    ?>
    </div>

            <tr>

                            <td>Localizacion: </td>
                            <td><select multiple size="3" name="location" id="loc[]" placeholder="Localizacion">

                                <option value="Urbano" selected>Urbano</option>
                                <option value="Naturaleza">Naturaleza</option>
                                <option value="Interior">Interior</option>
                                </select></td>
            </tr>

             <div class="checkbox1">
                 <td>Tipo de fotografia: </td>
                    <?php

                    $check=explode(":", $user['formato']);
                    
                     ?>
                     <?php
                     
                        $check_array=in_array("Retrato", $check);
                        if($check_array){
                    ?>
                    <input type="checkbox" id= "formato[]" name="formato[]" placeholder= "formato" value="Retrato" class="checkbox1" checked /> Retrato
                    <?php
                         } else {
                      ?>

                     <input type="checkbox" id= "formato[]" name="formato[]" placeholder= "formato" value="Retrato" class="checkbox1"  />Retrato    


                         
                     <?php
                     }
                        
                        $check_array=in_array("Paisaje", $check);
                        if($check_array){
                    ?>
                    <input type="checkbox" id= "formato[]" name="formato[]" placeholder= "formato" value="Paisaje" class="checkbox1" checked /> Paisaje
                    <?php
                         } else {
                      ?>

                     <input type="checkbox" id= "formato[]" name="formato[]" placeholder= "formato" value="Paisaje" class="checkbox1"  />Paisaje    


                    <?php
                         }
                        $check_array=in_array("Aerea", $check);
                        if($check_array){
                    ?>
                    <input type="checkbox" id= "formato[]" name="formato[]" placeholder= "formato" value="Aerea" class="checkbox1" checked /> Aerea </td>

                     <?php
                         } else {
                      ?>

                      <input type="checkbox" id= "formato[]" name="formato[]" placeholder= "formato" value="Aerea" class="checkbox1"  /> Aerea </td>   

                    <?php
                         } 
                        
                    ?>

                  <td><font color="red">
                  
                </font></font></td>
            </div>
   <br><br>
 <input name="Enviar" type="submit" value="Enviar" class="boton"/>

  </form>
  </div>