<?php

// domain sistem name connector
// driver = type of bdd
// host
// port
// user
// password

$dsn = "mysql:host=localhost;dbname=bdd_actu_piondupilat"; // le port est declare ici entre host et bdname

$user = "root";

$password = "";




//try rentre dans la categorie de exception = gestion des erreurs
try{
    $connexion = new PDO($dsn,$user,$password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException){

    echo "connexion error";

}



?>