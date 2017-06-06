<?php

if ((isset($_GET['page'])) && ($_GET['page']==="controller_users") ){

	include("view/include/top_page_users.php");
}else{
	include("view/include/top_page.php");
}
session_start();
if ((isset($_GET['page']))){

	$_SESSION['page']=$_GET['page'];
	
} else {

	$_SESSION['page']="home";		
}
?>
<div id="wrapper">		
	
	<?php include("view/include/header.php"); ?>        
	
	<div id="menu">
		<?php

		
		include("view/include/menu.php"); 


		?>
	</div>	
	<div id="contenido">
		<?php 
		
		include("view/include/pages.php"); ?>        

		<br style="clear:both;" />
	</div>
	<div id="footer">   	   
		<?php include("view/include/footer.php"); ?>        
	</div>
</div>
<?php include("view/include/bottom_page.php"); ?>