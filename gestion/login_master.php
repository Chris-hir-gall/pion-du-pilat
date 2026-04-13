<?php
require_once "class/master.php";
session_start();

if (isset($_POST["identifian"]) && isset($_POST["mot_de_passe"])) {

    $login = new master();
    $identifiant = htmlspecialchars($_POST["identifian"]);
    $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);

    if ($login->search_login($identifiant, $mot_de_passe)) {

        echo $_SESSION['nom']; // Affiche le nom de l'utilisateur connecté
        header("Location: dashboard.php");
        exit;

    } else {

        header("Location: log-in_form.php");
        exit;
    }

} else {

    header("Location: log-in_form.php");
    exit;
}


?>
