<?php
include("module/login/model/functions_login.inc.php");
include("module/photos/model/DAO.php");
$link = mysqli_connect('127.0.0.1', 'root', '');
if ($link === false) {
    $callback = 'index.php?page=503';
    die('<script>window.location.href="' . $callback . '";</script>');
} 


switch ($_GET['op']) {
    case 'entrar';
    	include("module/login/view/login.php");
    break;

    case 'check_user';

    if (isset($_POST['Enviar'])) {

        $result = validate_login();
        
       
        if ($result['resultado']) {
            $arrArgument = array(
                'usuario' => $result['datos']['usuario'],
                );
            
           	$_SESSION['user'] = $arrArgument;

		    $daouser = new DAO();
			$rdo     = $daouser->check_login($_SESSION['user']['usuario']);
			if ($rdo) {
               
                $callback = 'index.php?page=homepage';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
            	echo "No Existe";
            }
			
			
 			
        } else {
            $error = $result['error'];
                //debug($error);
        }
        
    }
  
     include("module/login/view/login.php");

    break;
}
?>