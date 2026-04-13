<?php
require_once "doctype.php";
?>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card card-body p-4">
            <p class="small text-muted mb-3">
                Conexion a l'interface de administrateur.
            </p>
            <form action="login_master.php" method="post">
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
                    se conecter
                </button>
            </form>
        </div>
    </div>    
</body>
</html>