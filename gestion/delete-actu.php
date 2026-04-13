<?php
    require_once "../config/connexion.php";
    require_once "class/actu.php";

    session_start();

    if(isset($_SESSION['admin_id'])){

    }else{

        header("location:log-in_form.php");

    }
    if (isset($_GET['actu_id']) && $_GET['actu_id']>0) {
        $_GET['actu_id'] = htmlspecialchars($_GET['actu_id']);
    }
     
    $actu = new actu();
    $actu->delete_actu($_GET['actu_id']);
    header("location:liste_actu.php");


?>