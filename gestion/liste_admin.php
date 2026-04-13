<?php

session_start();

if(isset($_SESSION['admin_id'])){

}else{

    header("location:log-in_form.php");

}
require_once "class/admin.php";

$login = new login();
$admins = $login->get_all_admins();

require_once "doctype.php";

?>
<body>
    <div class="card">
        <div class="card-body">
            <h1>Liste des administrateurs</h1>

            <ul>
                <?php foreach ($admins as $admin): ?>
                    <li><?= htmlspecialchars($admin['nom']) ?><a href="delete-admin.php?admin_id=<?= $admin['admin_id'] ?>"><button class="btn btn-danger">Supprimer</button></a></li>
                <?php endforeach; ?>
            </ul>
            <a href="dashboard.php"><button class="btn btn-primary">Retour au dashboard</button></a>
            <a href="log-out.php"><button class="btn btn-secondary">Se déconnecter</button></a>
        </div>
    </div>
</body>