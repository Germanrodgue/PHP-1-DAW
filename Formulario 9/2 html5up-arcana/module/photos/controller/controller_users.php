<?php
include("module/photos/model/functions.inc.php");
include("module/photos/model/DAO.php");
$link = mysqli_connect('127.0.0.1', 'root', '');
if ($link === false) {
    $callback = 'index.php?page=503';
    die('<script>window.location.href="' . $callback . '";</script>');
}
switch ($_GET['op']) {
    case 'list';
        $daouser = new DAO();
        $rdo     = $daouser->select_all_user();
        if ($rdo) {
            include("module/photos/view/list_user.php");
        }
        break;
    case 'create';
        if (isset($_POST['Enviar'])) {
            $result = validate_user();
            
          
            if ($result['resultado']) {
                $arrArgument = array(
                    'nombre' => $result['datos']['nombre'],
                    'email' => $result['datos']['correo'],
                    'fecha' => $result['datos']['fecha'],
                    'link' => $result['datos']['link'],
                    'imgnombre' => $result['datos']['imgnombre'],
                    'descr' => $result['datos']['descr'],
                    'tipo' => $result['datos']['tipo'],
                    'loc' => $result['datos']['location'],
                    'formato' => $_POST['formato']
                );
                
                $_SESSION['user'] = $arrArgument;

                $daouser          = new DAO();
                $rdo              = $daouser->nuevo_user($_SESSION['user']);
               
                if ($rdo) {

                    echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
                    $callback = 'index.php?page=controller_users&op=list';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

            } else {
                $error = $result['error'];
                //debug($error);
            }
        
        }
        include("module/photos/view/create_user.php");
        break;
    case 'update';
        if (isset($_POST['Enviar'])) {
            $result = validate_user();
            //debug($result);
            if ($result['resultado']) {
                
                $arrArgument      = array(
                    'id' => $_SESSION['id'],
                    'nombre' => $result['datos']['nombre'],
                    'email' => $result['datos']['correo'],
                    'fecha' => $result['datos']['fecha'],
                    'link' => $result['datos']['link'],
                    'tipo' => $result['datos']['tipo'],
                    'imgnombre' => $result['datos']['imgnombre'],
                    'descr' => $result['datos']['descr'],
                    'tipo' => $result['datos']['tipo'],
                    'loc' => $result['datos']['location'],
                    'formato' => $_POST['formato']
                );


                //redirigir a otra p�gina con los datos de $arrArgument y $mensaje
                $_SESSION['user'] = $arrArgument;
                //header("Location:index.php?page=results_user1");
                try {
                    $daouser = new DAO();
                    $rdo     = $daouser->update_user($_SESSION['user']);
                }
                catch (Exception $e) {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
                if ($rdo) {
                    echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
                    $callback = 'index.php?page=controller_users&op=list';
                    die('<script>window.location.href="' . $callback . '";</script>');
                } else {
                    $callback = 'index.php?page=503';
                    die("no va");
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
                //En el caso de enviar al usuario un correo y finalizar la aplicaci�n
                //include "results_user.php";
                //die;
            } else {
                $error = $result['error'];
                //debug($error);
            }
        }
        try {

            $daouser        = new DAO();
            $rdo            = $daouser->select_user($_SESSION['user']['id']);
            $user           = get_object_vars($rdo);
            $_SESSION['id'] = $user['id'];
        }
        catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        include("module/photos/view/update_user.php");
        break;
    case 'read';
        $daouser = new DAO();
        $rdo     = $daouser->select_user($_GET['id']);
        $user    = get_object_vars($rdo);

        
        if ($rdo) {
            include("module/photos/view/read_user.php");
        }
        break;
    case 'delete';
        if (isset($_POST['delete'])) {
            try {
                $daouser = new DAO();
            }
            catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
            $rdo = $daouser->delete_user($_GET['id']);
            if ($rdo) {
                echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                $callback = 'index.php?page=controller_users&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }
        include("module/photos/view/delete_user.php");
        break;
        case 'delete_all';
        if (isset($_POST['delete'])) {
            try {
                $daouser = new DAO();
            }
            catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
            $rdo = $daouser->delete_all_user();
            if ($rdo) {
                echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                $callback = 'index.php?page=controller_users&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }
        include("module/photos/view/delete_all.php");
        break;
    default;
        include("view/include/error404.php");
        break;
}