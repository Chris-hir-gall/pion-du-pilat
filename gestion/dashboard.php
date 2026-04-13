<?php

    session_start();

    if(isset($_SESSION['admin_id'])){

    }else{

        header("location:log-in_form.php");

    }
     
    require_once "doctype.php";
?>



<body>
    <div class="card text-center mb-3 align-items-center">
        <div class="card-body">
            <h1 class="hero-title mb-3">WELCOME <?=$_SESSION['nom'];?></h1>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card card-body p-4 col-md-5 me-3 ">
            <p class="small text-muted mb-3">
                Ajout d'un nouvel adminiatrateur.
            </p>
            <form action="ad-admin.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="votre nom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Identifiant</label>
                    <input type="text" class="form-control" name="identifian" placeholder="votre identifiant">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot De Passe</label>
                    <input type="password" class="form-control" name="mot_de_passe" placeholder="votre mot de passe">
                </div>
                <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                <button type="submit" class="btn btn-primary w-100">
                    Ajouter nouvel administrateur
                </button>
                
            </form>
            <a href="liste_admin.php"><button class="btn btn-secondary">Voir la liste des administrateurs</button></a>
        </div>

        <div class="card card-body p-4 col-md-5">
            <p class="small text-muted mb-3">
                Ajout d'un nouvel actualite.
            </p>
            <form action="ad-actu.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Categorie</label>
                    <select name="categorie" id="">
                        <option value="tournoi interne">tournoi interne</option>
                        <option value="jeunes">jeunes</option>
                        <option value="vie du club">vie du club</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Titre</label>
                    <input type="text" class="form-control" name="titre" placeholder="titre de l'actualite">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contenu</label>
                    <textarea class="form-control" name="contenu" placeholder="contenu de l'actualite"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                    <label class="form-label">Frase de acroche</label>
                    <textarea class="form-control" name="acroche" placeholder="frase de acroche"></textarea>
                </div>
                <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                <button type="submit" class="btn btn-primary w-100">
                    Ajouter nouvel actualite
                </button>
                
            </form>
            <a href="liste_actu.php"><button class="btn btn-secondary">Voir la liste des actualites</button></a>
        </div>
    </div> 
    <div class="text-center">
        <a href="log-out.php"><button class="btn btn-alert ">se déconnecter</button></a>
    </div>   
</body>

</html>