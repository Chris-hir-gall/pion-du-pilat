<?php

session_start();

if(isset($_SESSION['admin_id'])){

}else{

    header("location:log-in_form.php");

}
require_once "../config/connexion.php";
require_once "class/actu.php";

$actu = new actu();
$actualites = $actu->get_all_actu();

require_once "doctype.php";

?>
<body>
    <div class="">
        <div class="">

            <div class="card">
                <div class="card-body">
                    <h1>Liste des actualités</h1>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-5 mt-1 ">
                <?php if (empty($actualites)): ?>
                    <p>Aucune actualité disponible.</p>
                <?php endif; ?>

                <?php foreach ($actualites as $actu): ?>
                    <?php
                        switch ($actu['categorie']) {
                            case 'tournoi interne':
                                $badgeClass = 'bg-primary-subtle text-primary';
                                break;
                            case 'jeunes':
                                $badgeClass = 'bg-success-subtle text-success';
                                break;
                            case 'vie du club':
                                $badgeClass = 'bg-warning-subtle text-warning';
                                break;
                            default:
                                $badgeClass = 'bg-secondary-subtle text-secondary';
                        }
                    ?>
                    <article class="card h-100 border-0 shadow-sm mb-6 md-5 col-8 ">
                    <div class="card-body mb-6 text-center ml-2">
                        <span class="badge <?= $badgeClass ?> mb-2"><?= htmlspecialchars($actu['categorie']) ?></span>
                        <h3 class="h6"><?= htmlspecialchars($actu['titre']) ?></h3>
                        <p class="small text-muted">
                            <?= nl2br(htmlspecialchars($actu['contenu'])) ?> 
                        </p>
                        <?php if (!empty($actu['image'])): ?>
                            <img src="../images/uploads_actu/<?= htmlspecialchars($actu['image']) ?>" alt="<?= htmlspecialchars($actu['titre']) ?>" class="img-fluid mb-4 mt-4 col-3">
                        <?php endif; ?>
                        <p class="small text-muted">
                            <?= nl2br(htmlspecialchars($actu['acroche'])) ?>
                        </p>
                            Publié le <?= date('d M Y', strtotime($actu['date'])) ?>
                        <br>
                    <a href="delete-actu.php?actu_id=<?= $actu['actu_id'] ?>"><button class="btn btn-danger">Supprimer</button></a>   
                    </div>
                    </article>
                    
                <?php endforeach; ?>
            </div>
            <a href="dashboard.php"><button class="btn btn-primary">Retour au dashboard</button></a>
            <a href="log-out.php"><button class="btn btn-secondary">Se déconnecter</button></a>
        </div>
    </div>
</body>