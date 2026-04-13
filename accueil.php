<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Le Pion du Pilat - Club d'échecs à Échalas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Le Pion du Pilat, club d'échecs à Échalas : cours enfants et adultes, tournois, jeu de loisir dans une ambiance conviviale.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <style>
    

    
    
  </style>
  
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
  <div class="container">
    <div>
      <a href="accueil.php"><img src="images/LogoEchec.png" alt="Logo du club Le Pion du Pilat" width="40" height="40"></a>
    </div>
    <a class="navbar-brand d-flex align-items-center" href="#">
      <span class="fs-4 me-2">♟</span>
      <span>Le Pion du Pilat</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#club">Le club</a></li>
        <li class="nav-item"><a class="nav-link" href="#activites">Activités</a></li>
        <li class="nav-item"><a class="nav-link" href="#actualites">Actualités</a></li>
        <li class="nav-item"><a class="nav-link" href="#infos">Infos pratiques</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <a href="#contact" class="btn btn-primary ms-lg-3">Rejoindre le club</a>
    </div>
  </div>
</nav>
<section class="section-padding text-center">
  <div class="container ">
    <div class=" align-items-center g-5">
      <div class=" text-center">
        <img src="images/LogoEchec.png" alt="Logo du club Le Pion du Pilat" class="img-fluid mb-4 mt-4 col-3">
      </div>
    </div>
  </div>
</section>

<!-- HERO -->
<header class="hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="badge rounded-pill text-bg-primary hero-badge mb-3">
          Club d'échecs à Échalas · Pilat
        </span>
        <h1 class="hero-title mb-3">
          Jouer, progresser et partager
          au <span class="text-primary">Pion du Pilat</span>
        </h1>
        <p class="hero-subtitle text-muted mb-4">
          Cours pour enfants et adultes, entraînements, tournois officiels et parties amicales 
          dans une ambiance conviviale au cœur des monts du Pilat.
        </p>
        <div class="d-flex flex-wrap gap-2 mb-4">
          <a href="#contact" class="btn btn-primary btn-lg">
            Essayer une séance
          </a>
          <a href="#activites" class="btn btn-outline-secondary btn-lg">
            Découvrir les activités
          </a>
        </div>
        <p class="text-muted small mb-0">
          Ouvert aux débutants comme aux joueurs confirmés
          A noter que les groupes de niveau sont indépendants de l'âge.
          L'adhésion annuelle au club est de 50 €.
        </p>
        <p class="text-muted small mb-0">
          Guy Tisserant, président du club · Affiliation FFE possible.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <h2 class="h5 mb-3">Prochaine séance découverte</h2>
            <ul class="list-unstyled mb-3">
              <li><strong>Date :</strong></li>
              <li><strong>Lieu :</strong> Salle de l'ancienne bibliotheque d'Échalas</li>
              <li><strong>Public :</strong> enfants dès 6 ans, ados, adultes</li>
            </ul>
            <p class="small text-muted mb-3">
              Inscrivez-vous pour être informé de la prochaine date de séance découverte du club.
            </p>
            <form action="mail2.php" method="post">
              <div class="mb-3">
                <label class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" name="email" placeholder="nom@exemple.fr">
              </div>
              <div class="mb-3">
                <label class="form-label">Pour qui ?</label>
                <input type="text" name="name" class="form-control" placeholder="Prénom et âge de l'enfant ou de l'adulte intéressé ">
                <select class="form-select" name="public">
                  <option>Enfant</option>
                  <option>Adolescent</option>
                  <option>Adulte</option>
                  <option>Famille</option>
                </select>
              </div>
              <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
              <button type="submit" class="btn btn-primary w-100">
                Être informé
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- SECTION LE CLUB PRESENTATION BOTSTRAPT 5 -->
<section class="py-5" id="club">
  <div class="container card border-0 shadow-sm">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h2 class="section-title mb-3">Le Pion du Pilat, un club de proximité</h2>
        <p class="section-subtitle mb-3">
          Installé à Échalas, le club a pour vocation de faire découvrir les échecs à tous, 
          de l'initiation à la compétition, dans une ambiance chaleureuse et familiale.
        </p>
        <p class="mb-3">
          Nous proposons des séances hebdomadaires pour les jeunes et les adultes, 
          ainsi que des animations locales autour du jeu d'échecs.
        </p>
        <p class="mb-0">
          Le club est ouvert aux habitants d'Échalas et des communes voisines du Pilat, 
          quel que soit votre niveau. Venez essayer, la première séance est souvent gratuite 
          dans les clubs d'échecs associatifs.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <div class="icon-circle mb-3">♟</div>
                <h3 class="h6">Initiation jeunes</h3>
                <p class="small text-muted mb-0">
                  Apprentissage ludique des règles, tactiques et premières parties pour les 6-14 ans.
                </p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <div class="icon-circle mb-3">♛</div>
                <h3 class="h6">Adultes & loisirs</h3>
                <p class="small text-muted mb-0">
                  Soirées conviviales, analyses de parties et préparation aux compétitions régionales.
                </p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <div class="icon-circle mb-3">♜</div>
                <h3 class="h6">Compétitions</h3>
                <p class="small text-muted mb-0">
                  Participation possible aux championnats par équipes et tournois rapides homologués FFE.
                </p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <div class="icon-circle mb-3">♞</div>
                <h3 class="h6">Animations locales</h3>
                <p class="small text-muted mb-0">
                  Présence au forum des associations, simultanées, tournois amicals en plein air dès que possible.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION ACTIVITÉS -->
<section class="py-5 bg-soft" id="activites">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title mb-2">Activités proposées</h2>
      <p class="section-subtitle mx-auto">
        Des créneaux adaptés à chaque âge et chaque niveau, pour pratiquer les échecs à votre rythme.
      </p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h3 class="h5 mb-2">École d'échecs (jeunes)</h3>
            <p class="text-muted small mb-3">
              Groupes par niveau, méthodes pédagogiques modernes, progression suivie sur l'année.
            </p>
            <ul class="small text-muted mb-0">
              <li>Séances hebdomadaires (1h à 1h30)</li>
              <li>Découverte des ouvertures, tactique, finales</li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h3 class="h5 mb-2">Séances adultes</h3>
            <p class="text-muted small mb-3">
              Pour reprendre les échecs en douceur ou se préparer aux tournois officiels.
            </p>
            <ul class="small text-muted mb-0">
              <li>Soirées d'entraînement et parties libres</li>
              <li>Analyses collectives, mini-cours thématiques</li>
              <li>Possibilité de suivre son classement Elo FIDE/FFE via les compétitions.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h3 class="h5 mb-2">Tournois & événements</h3>
            <p class="text-muted small mb-3">
              Organisation de petits tournois internes et participation au calendrier départemental.
            </p>
            <ul class="small text-muted mb-0">
              <li>Tournois rapides et blitz</li>
              <li>Rencontres amicales avec d'autres clubs</li>
              <li>Déplacements possibles sur les opens régionaux.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION ACTUALITÉS -->
<!-- <section class="py-5" id="actualites">
  <div class="container">
    <div class="text-center mb-5 card border-0 shadow-sm p-4">
      <h2 class="section-title mb-2">Actualités récentes</h2>
      <p class="section-subtitle mx-auto">
        
      </p>
    </div>

    <?php
      //include "actualites/affichage_actu.php";
    ?>

    <div class="row g-4">
      <div class="col-md-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <span class="badge bg-primary-subtle text-primary mb-2">Tournoi interne</span>
            <h3 class="h6"></h3>
            <p class="small text-muted">
              
            </p>
            <p class="small text-muted mb-0">Date et règlement à venir.</p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <span class="badge bg-success-subtle text-success mb-2">Jeunes</span>
            <h3 class="h6">Création d'un groupe d'initiation enfants</h3>
            <p class="small text-muted">
              Mise en place d'un créneau spécifiquement dédié aux plus jeunes, avec matériel pédagogique adapté.
            </p>
            <p class="small text-muted mb-0">Pré-inscriptions via le formulaire de contact.</p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <span class="badge bg-warning-subtle text-warning mb-2">Vie du club</span>
            <h3 class="h6">Le Pion du Pilat au forum des associations</h3>
            <p class="small text-muted">
              Stand de présentation du club, démonstrations et parties libres sur place pour faire découvrir les échecs à tous.
            </p>
            <p class="small text-muted mb-0">Venez nous rencontrer et poser vos questions.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section> -->
<section class="py-5" id="actualites">
  <div class="container">
    <div class="text-center mb-5 card border-0 shadow-sm p-4">
      <h2 class="section-title mb-2">Actualités récentes</h2>
      <p class="section-subtitle mx-auto ">
        Retrouvez ici les dernières nouvelles du club : tournois, animations, vie du club…
      </p>
    </div>
    
    <?php include "actualites/affichage_actu.php"; ?>
    
  </div>
</section>

<!-- INFOS PRATIQUES -->
<section class="py-5 bg-soft" id="infos">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <h2 class="section-title mb-3">Infos pratiques</h2>
        
        <div class="mb-4">
          <h3 class="h6 mb-2">Horaires types</h3>
          <ul class="list-unstyled small text-muted mb-0">
            <li><span class="schedule-day">Lundi :</span> • 16 h 45 - 18 h 30 : initiation</li>
            <li><span class="schedule-day">Lundi :</span> • 18 h 30 - 22 h : perfectionnement /confirmé</li>
          </ul>
        </div>
        <div class="mb-4">
          <h3 class="h6 mb-2">Lieu</h3>
          <p class="small text-muted mb-0">
            ancienne bibliothèque d'Echalas<br>
            69700 Échalas, au portes du Pilat.
          </p>
        </div>
        <div>
          <h3 class="h6 mb-2">Adhésion </h3>
          <ul class="small text-muted mb-0">
            <li>Licence FFE loisir ou compétition en supplément selon le choix du joueur.</li>
            <li>Tarif réduit possible pour les familles et les jeunes.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="section-title mb-3">Accès</h2>
        <p class="section-subtitle mb-3">
          Échalas est facilement accessible depuis les communes voisines du Pilat et la métropole lyonnaise en voiture.
        </p>
        <div class="ratio ratio-4x3 rounded border bg-white">
          <!-- Intègre ici une iframe Google Maps réelle quand tu auras l’adresse exacte -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d207.6610202021046!2d4.715491428149693!3d45.55148183484873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1773150744015!5m2!1sfr!2sfr" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <div class="d-flex align-items-center justify-content-center text-muted small">
            Carte Google Maps du lieu du club (à intégrer)
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="py-5" id="contact">
  <div class="container">
    <div class="row g-5 ">
      <div class="col-lg-6">
        <h2 class="section-title mb-3 card border-0 shadow-sm p-4">Contacter le club</h2>
        <p class="section-subtitle mb-4 card border-0 shadow-sm p-4">
          Une question, une inscription ou une demande d'information pour une animation échecs dans votre structure ? 
          Laissez-nous un message.
        </p>
        <form action="mail1.php" method="post">
          <div class="mb-3 card border-0 shadow-sm p-4">
            <label class="form-label card border-0 shadow-sm p-4">Nom et prénom</label>
            <input type="text" class="form-control"name="name" placeholder="Votre nom">
          </div>
          <div class="mb-3 card border-0 shadow-sm p-4">
            <label class="form-label card border-0 shadow-sm p-4">Telephone</label>
            <input type="text" class="form-control" name="phone" placeholder="Votre numéro de téléphone">
          </div>
          <div class="mb-3 card border-0 shadow-sm p-4">
            <label class="form-label card border-0 shadow-sm p-4">Adresse e-mail</label>
            <input type="email" class="form-control" name="email" placeholder="nom@exemple.fr">
          </div>
          <div class="mb-3 card border-0 shadow-sm p-4">
            <label class="form-label">Objet</label>
            <select class="form-select" name="subject">
              <option>Inscription / séance d'essai</option>
              <option>Infos sur les horaires et tarifs</option>
              <option>Organisation d'une animation</option>
              <option>Autre demande</option>
            </select>
          </div>
          <div class="mb-3 card border-0 shadow-sm p-4">
            <label class="form-label ">Message</label>
            <textarea class="form-control" rows="4" name="message" placeholder="Votre message..."></textarea>
          </div>
          <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
          <button type="submit" class="btn btn-primary">
            Envoyer le message
          </button>
        </form>
      </div>
      <div class="col-lg-6 ">
        <h2 class="section-title mb-3 card border-0 shadow-sm p-4">Coordonnées</h2>
        <ul class="list-unstyled small text-muted mb-4 card border-0 shadow-sm p-4">
          <li><strong>E-mail :</strong>lepiondupilat@gmail.com</li>
          <li><strong>Téléphone :</strong>06 60 16 90 12</li>
          <li><strong>Adresse :</strong>  69700 Échalas</li>
        </ul>
        <p class="small text-muted mb-2">
          <!-- N'hésitez pas à nous suivre sur les réseaux sociaux pour suivre les résultats des tournois et la vie du club. -->
        </p>
        <p class="small text-muted mb-0">
          <!-- Liens à ajouter : page Facebook du club, compte Instagram, etc. -->
        </p>
        <img class="img-fluid" src="images/chesspieces.jpg" alt="">
      </div>
      
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="py-4 border-top">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between small text-muted card border-0 shadow-sm p-4">
      <p class="mb-2 mb-md-0">
        © <span id="year"></span> Le Pion du Pilat - Club d'échecs à Échalas.
      </p>
      <p class="mb-0">
        Site réalisé avec Bootstrap 5.
      </p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
<!-- <script src="https://www.google.com/recaptcha/api.js?render=6Lf1FIcsAAAAALCAWLtjlSJOH2jRttBkYN1e7F8j"></script>
<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Lf1FIcsAAAAALCAWLtjlSJOH2jRttBkYN1e7F8j', {action: 'contact_form'})
        .then(function(token) {
        document.getElementById('recaptchaResponse').value = token;
        });
    });
</script> -->
</body>
</html>