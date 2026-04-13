<?php

    require_once "class/admin.php";

    session_start();

    if(isset($_SESSION['admin_id'])){

    }else{

        header("location:log-in_form.php");

    }
    if (isset($_GET['admin_id']) && $_GET['admin_id']>0) {
        $_GET['admin_id'] = htmlspecialchars($_GET['admin_id']);
    }
     
    $login = new login();
    $login->delete_admin($_GET['admin_id']);
    header("location:liste_admin.php");


?>