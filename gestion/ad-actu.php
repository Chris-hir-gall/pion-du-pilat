<?php

require_once "../config/connexion.php";
require_once "class/actu.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categorie = $_POST['categorie'];
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $acroche = $_POST['acroche'];
    $date_publication = date('Y-m-d H:i:s');

    $image_name = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../images/uploads_actu/'; //ou le fichier est uploadé

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $tmp_name = $_FILES['image']['tmp_name'];
        $original_name = basename($_FILES['image']['name']);

        $extension = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];//tipe de fichier autorisee

        if (in_array($extension, $allowed)) {
            $image_name = uniqid('actu_') . '.' . $extension;
            $destination = $upload_dir . $image_name;

            if (!move_uploaded_file($tmp_name, $destination)) { // déplace le fichier uploadé
                $image_name = null;
            }
        }
    }

    $actu = new actu();
    $actu->add_actu($categorie, $titre, $contenu, $acroche, $date_publication, $image_name);
}

header("Location: dashboard.php");
exit();
?>