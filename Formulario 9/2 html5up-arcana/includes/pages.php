<?php
	if (!isset($_GET['page'])) {
		include("pages/homepage.php");
	} else {
		switch($_GET['page']){
		case "homepage";
			include("pages/homepage.php");
			break;
		case "controller_users";
			include("pages/" .$_GET['page'].".php");
			break;
		default;
			include("pages/homepage.php");
			break;


	}

	}
?>
