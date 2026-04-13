<?php
require_once "config/connexion.php";
require_once "gestion/class/actu.php";

$actuObj = new actu();
$actualites = $actuObj->get_all_actu();
?>

<div class="card border-0 shadow-sm mb-5 mx-auto" style="max-width: 700px;">
  <div class="card-body">
    

    <?php if (empty($actualites)): ?>
      <p>Aucune actualité disponible pour le moment.</p>
    <?php else: ?>

      <div id="carouselActualites" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">

          <?php foreach ($actualites as $index => $actu): ?>
            <?php
              switch (mb_strtolower($actu['categorie'])) {
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

            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
              <article class="card border-0 shadow-sm h-100">
                <div class="card-body">
                  <span class="badge <?= $badgeClass ?> mb-2">
                    <?= htmlspecialchars($actu['categorie']) ?>
                  </span>
                  <h3 class="h6">
                    <?= htmlspecialchars($actu['titre']) ?>
                  </h3>
                  
                  <p class="small text-muted mb-2">
                    <?= nl2br(htmlspecialchars($actu['contenu'])) ?>
                  </p>
                  <?php if (!empty($actu['image'])): ?>
                            <img src="images/uploads_actu/<?= htmlspecialchars($actu['image']) ?>" alt="<?= htmlspecialchars($actu['titre']) ?>" class="img-fluid mb-4 mt-4 col-3">
                        <?php endif; ?>
                  <?php if (!empty($actu['acroche'])): ?>
                    <p class="small text-muted mb-0 fw-semibold">
                      <?= nl2br(htmlspecialchars($actu['acroche'])) ?>
                    </p>
                  <?php endif; ?>
                </div>
              </article>
            </div>
          <?php endforeach; ?>

        </div>

        <!-- Contrôles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselActualites" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselActualites" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>

        <!-- Indicateurs de bootstrap (-) -->
        <!--
        <div class="carousel-indicators">
          <?php foreach ($actualites as $index => $actu): ?>
            <button type="button"
                    data-bs-target="#carouselActualites"
                    data-bs-slide-to="<?= $index ?>"
                    class="<?= $index === 0 ? 'active' : '' ?>"
                    aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                    aria-label="Slide <?= $index + 1 ?>">
            </button>
          <?php endforeach; ?>
        </div>
        -->
      </div>

    <?php endif; ?>
  </div>
</div>