<div id="contenido" >
    
    	
    			<h3>LISTA DE FOTOGRAFIAS</h3>
    	
    	
    		<p><a href="index.php?page=controller_users&op=create" text-decoration="none"><img src="view/img/anadir.png"></a></p>
    		
        <div class="row">

         <?php
         foreach ($rdo as $row) {
         echo '<ul>';
         echo '<li>';
         echo  '<a href="index.php?page=controller_users&op=read&id='.$row['id'].'"><img src="http://www.cursosparajovenes.es/wp-content/uploads/2016/03/curso-fotografia.jpg" style="max-height: 300px; max-width: 300px;" border="0" alt=""/><br />
                <span>' . $row['id'] . '</span>
                <span>' . $row['nombre'] . '</span>
                <span> - ' . $row['tipo'] . '</span> <br />
               <a href="index.php?page=controller_users&op=update&id='.$row['id'].' text-decoration="none"><img src="view/img/update.png"></a>
               <a href="index.php?page=controller_users&op=delete&id='.$row['id'].'" text-decoration="none"><img src="view/img/delete.png"></a>
                </a>';
         echo '</li> ';
         echo '</ul>';
        }
        ?>

</div>

</div>