<div id="contenido">
    <h1>Informacion del Usuario y de la fotografía</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Id: </td>
            <td>
                <?php
                    echo $user['id'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Nombre: </td>
            <td>
                <?php
                    echo $user['nombre'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Email: </td>
            <td>
                <?php
                    echo $user['email'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha: </td>
            <td>
                <?php
                    echo $user['fecha'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Formato: </td>
            <td>
                <?php
                    echo $user['tipo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Link: </td>
            <td>
                <?php
                    echo $user['link'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Nombre de la imagen: </td>
            <td>
                <?php
                    echo $user['imgnombre'];
                ?>
            </td>
        </tr>

          <tr>
            <td>Descripcion: </td>
            <td>
                <?php
                    echo $user['Descripcion'];
                ?>
            </td>
        </tr>

         <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $user['formato'];
                ?>
            </td>
        </tr>
         <tr>
            <td>Localizacion: </td>
            <td>
                <?php
                    echo $user['Localizacion'];
                ?>
            </td>
        </tr>
        
        <tr>
           
    </table>
    </p>
    <p><a href="index.php?page=controller_users&op=list">Volver</a></p>
</div>