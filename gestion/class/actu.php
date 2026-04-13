<?php

// composant de connexion


class actu {

        public $conn_login;
        public $tab_role = [];

        public function __construct() {
            global $connexion;
            $this->conn_login = $connexion;
        }

        public function get_all_actu() {
            $stmt = $this->conn_login->prepare("SELECT * FROM actualites");
            $this->erreur_s($stmt,3);
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return false;
        }

            
        public function add_actu($categorie, $titre, $contenu, $acroche, $date_publication, $image_name = null) {

        $stmt = $this->conn_login->prepare(
            "INSERT INTO actualites (categorie, titre, contenu, acroche, date, image)
             VALUES (:categorie, :titre, :contenu, :acroche, :date_publication, :image)"
        );
        $this->erreur_s($stmt,2);
        $stmt->bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindValue(':contenu', $contenu, PDO::PARAM_STR);
        $stmt->bindValue(':acroche', $acroche, PDO::PARAM_STR);
        $stmt->bindValue(':date_publication', $date_publication, PDO::PARAM_STR);
        $stmt->bindValue(':image', $image_name, PDO::PARAM_STR);

        return $stmt->execute();
    }


        public function delete_actu($actu_id) {
            $stmt = $this->conn_login->prepare("DELETE FROM actualites WHERE actu_id = :actu_id");
            $this->erreur_s($stmt,4);
            $stmt->bindValue(':actu_id', $actu_id, PDO::PARAM_INT);
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