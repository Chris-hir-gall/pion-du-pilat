<?php

// composant de connexion
require_once "../config/connexion.php";

class master {

    public $conn_login;
    public $tab_role = [];

    public function __construct() {
        global $connexion;
        $this->conn_login = $connexion;
    }

    public function search_login($identifiant, $mot_de_passe) {

        $stmt = $this->conn_login->prepare(
            "SELECT * FROM master WHERE identifiant = :identifiant AND motdepasse = :motdepasse"
        );
        $this->erreur_s($stmt,1);

        $stmt->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);
        $stmt->bindValue(':motdepasse', $mot_de_passe, PDO::PARAM_STR);

        if ($stmt->execute()) {

            // Un seul utilisateur attendu
            $tableau = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($tableau) {
                $this->tab_role[] = $tableau;
                $_SESSION['nom'] = $tableau['nom'];// même partout
                $_SESSION['admin_id'] = $tableau['admin_id']; // Stocker l'ID de l'administrateur dans la session
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public function add_admin($nom, $identifiant, $mot_de_passe) {

        $stmt = $this->conn_login->prepare(
            "INSERT INTO admin (nom, identifiant, motdepasse) VALUES (:nom, :identifiant, :motdepasse)"
        );
        $this->erreur_s($stmt,2);

        $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);
        $stmt->bindValue(':motdepasse', $mot_de_passe, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function get_all_admins() {
        $stmt = $this->conn_login->prepare("SELECT * FROM admin");
        $this->erreur_s($stmt,3);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function delete_admin($admin_id) {
        $stmt = $this->conn_login->prepare("DELETE FROM admin WHERE admin_id = :admin_id");
        $this->erreur_s($stmt,4);
        $stmt->bindValue(':admin_id', $admin_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function erreur_s($stmt, $code_erreur){
        switch($code_erreur){
            case 1 : if(!$stmt){ die("erreur de conexion ❌"); } break;
            case 2 : if(!$stmt){ die("erreur d'ajout ❌"); } break;
            case 3 : if(!$stmt){ die("erreur de recuperation ❌"); } break;
            case 4 : if(!$stmt){ die(" ❌"); } break;
            default : print "erreur inconnu de commande ❌";
        }
    }
}

?>