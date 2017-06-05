
    
    	
    			<h3>LISTA DE FOTOGRAFIAS</h3>
    	
    	
    		<p><a href="index.php?page=controller_users&op=create"><img src="view/img/anadir.png"></a>

            <a href="index.php?page=controller_users&op=delete_all" ><img src="view/img/delete_2.png" width="32px" ></a>
            </p>

    		
        <div class="row">

         <?php
         
         
         foreach ($rdo as $row) {
         echo '<ul>';
         echo '<li>';
         echo  '<a href="index.php?page=controller_users&op=read&id='.$row['id'].'"><img src='.$row['link'].' style="max-height: 300px; max-width: 300px;" border="0" alt=""/><br />
                <span>' . $row['id'] . '</span>
                <span> - ' . $row['imgnombre'] . '</span>
                <span> - ' . $row['nombre'] . '</span> <br />
               <a href="index.php?page=controller_users&op=update&id='.$row['id'].' "><img src="view/img/update.png"></a>
               <a href="index.php?page=controller_users&op=delete&id='.$row['id'].'" "><img src="view/img/delete.png"></a>
                </a>';
         echo '</li> ';
         echo '</ul>';
        }
        ?>

</div>

