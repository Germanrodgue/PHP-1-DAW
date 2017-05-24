<?php
include("utils/functions.inc.php"); 
include("classes/Browser.class.php");

include ("includes/DAO.php");

switch($_GET['op']){
    case 'list';
    try{
        $daouser = new DAO();
        $rdo = $daouser->select_all_user();
    }catch (Exception $e){
        $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
    }

    if(!$rdo){
     $callback = 'index.php?page=503';
     die('<script>window.location.href="'.$callback .'";</script>');
 }else{
    include("list_user.php");
}
break;

case 'create';

if (isset($_POST['Enviar'])){

   $result = validate_user();
            //debug($result);
   if ($result['resultado']) {
    $arrArgument = array(
        'nombre' => $result['datos']['nombre'],
        'email' => $result['datos']['correo'],
        'fecha' => $result['datos']['fecha'],
        'link' => $result['datos']['link'],
        'tipo' => $result['datos']['tipo'],
        );
    debug($arrArgument);


                //redirigir a otra p�gina con los datos de $arrArgument y $mensaje
    $_SESSION['user']=$arrArgument;
                //header("Location:index.php?page=results_user1");
    try{
        $daouser = new DAO();
        $rdo = $daouser->nuevo_user($_SESSION['user']);
    }catch (Exception $e){
        $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
    }

    if($rdo){
        echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
        $callback = 'index.php?page=controller_users&op=list';
        die('<script>window.location.href="'.$callback .'";</script>');
    }else{
        echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
        $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
    }

                //En el caso de enviar al usuario un correo y finalizar la aplicaci�n
                //include "results_user.php";
                //die;
}else{

    $error = $result['error'];

                //debug($error);
}

}
include("create_user.php");
break;


case 'update';

if (isset($_POST['Enviar'])){

   $result = validate_user();
            //debug($result);
   if ($result['resultado']) {
       
    debug($_SESSION['id']);
    
    $arrArgument = array(
        'id' => $_SESSION['id'],
        'nombre' => $result['datos']['nombre'],
        'email' => $result['datos']['correo'],
        'fecha' => $result['datos']['fecha'],
        'link' => $result['datos']['link'],
        'tipo' => $result['datos']['tipo'],
        );

                //redirigir a otra p�gina con los datos de $arrArgument y $mensaje
    $_SESSION['user']=$arrArgument;
                //header("Location:index.php?page=results_user1");
    try{
        $daouser = new DAO();
        $rdo = $daouser->update_user($_SESSION['user']);
    }catch (Exception $e){
        $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
    }

    if($rdo){
        echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
        $callback = 'index.php?page=controller_users&op=list';
        die('<script>window.location.href="'.$callback .'";</script>');
    }else{
       
        $callback = 'index.php?page=503';
        die("no va");
        die('<script>window.location.href="'.$callback .'";</script>');
    }

                //En el caso de enviar al usuario un correo y finalizar la aplicaci�n
                //include "results_user.php";
                //die;
}else{

    $error = $result['error'];

                //debug($error);
}

}
try{
                $daouser = new DAO();
                $rdo = $daouser->select_user($_GET['id']);
                $user=get_object_vars($rdo);
                $_SESSION['id']=$user['id'];
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
include("update_user.php");
break;


case 'read';
try{
    $daouser = new DAO();
    $rdo = $daouser->select_user($_GET['id']);
    $user=get_object_vars($rdo);
}catch (Exception $e){
    $callback = 'index.php?page=503';
    die('<script>window.location.href="'.$callback .'";</script>');
}
if(!$rdo){
    $callback = 'index.php?page=503';
    die('<script>window.location.href="'.$callback .'";</script>');
}else{
    include("read_user.php");
}
break;
 case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAO();
                 
                    $rdo = $daouser->delete_user($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                    $callback = 'index.php?page=controller_users&op=list';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
            
            include("delete_user.php");
            break;
}