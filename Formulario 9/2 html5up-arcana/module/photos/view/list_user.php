


<h3>LISTA DE FOTOGRAFIAS</h3>



<div>
    <p>
        <input type="text"  id="myInput" onkeyup="Funcion_Buscador()" placeholder="Buscar por nombre, id...">
    </p>


    <p>

        <a href="index.php?page=controller_users&op=create">
            <img src="view/img/anadir.png">
        </a>

        <a href="index.php?page=controller_users&op=delete_all" >
            <img src="view/img/delete_2.png" width="32px" >
        </a>

    </p>
</div>

<div class="row">
    <ul id="Lista">

        <?php
        if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUNA FOTOGRAFIA</td>';
                        echo '</tr>';
        } else {

        foreach ($rdo as $row) {

            echo '<li>';
            echo ' <p style="text-align:center"> <a href="index.php?page=controller_users&op=read&id=' . $row['id'] . '"><img src=' . $row['link'] . ' style="max-height: 300px; max-width: 300px;" border="0" alt=""/><br />
            <span>' . $row['id'] . '</span>
            <span> - ' . $row['imgnombre'] . '</span>
            <span> - ' . $row['tipo'] . '</span> 
            <span> - ' . $row['Localizacion'] . '</span> <br />
            
            <a href="index.php?page=controller_users&op=update&id=' . $row['id'] . ' "><img src="view/img/update.png"  /></a> 
            <a href="index.php?page=controller_users&op=delete&id=' . $row['id'] . '" "><img src="view/img/delete.png"  /></a> 
            </a></p>';
            echo '</li> ';

    }
}
    ?>
</ul>
</div>