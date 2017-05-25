<?php
	if (!isset($_GET['page'])) {
		include("module/homepage.php");
	} else {
		switch($_GET['page']){
		case "homepage";
			include("module/homepage.php");
			break;
		case "controller_users";
			include("module/photos/controller/" .$_GET['page'].".php");
			break;
		case "404";
			include("view/include/error".$_GET['page'].".php");
			break;
		case "503";
			include("view/include/error".$_GET['page'].".php");
			break;
		default;
		include("view/include/error404.php");
			//include("module/homepage.php");
			break;

	}

	}
?>
