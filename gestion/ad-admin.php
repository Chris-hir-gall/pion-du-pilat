<?php

    session_start();

    if(isset($_SESSION['admin_id'])){

    }else{

        header("location:log-in_form.php");

    }
     
    if (isset($_POST["identifian"]) && isset($_POST["mot_de_passe"]) && isset($_POST["nom"])
        && !empty($_POST["identifian"]) && !empty($_POST["mot_de_passe"]) && !empty($_POST["nom"])) {

        require_once "class/admin.php";

        $login = new login();
        $identifiant = htmlspecialchars($_POST["identifian"]);
        $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
        $nom = htmlspecialchars($_POST["nom"]);

        if ($login->add_admin($nom, $identifiant, $mot_de_passe)) {

            header("Location: dashboard.php");
            exit;

        } else {

            header("Location: dashboard.php");
            exit;
        }

    } else {

        header("Location: dashboard.php");
        exit;
    }

?>