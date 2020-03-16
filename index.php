<?php
$title = "Accueil";
require_once 'views/layout/header.php';
?>
<?php require_once 'views/layout/nav.php'; ?>

<!-- CONTENU -->
<div class="jumbotron">
  <h1 class="display-4">TP 1</h1>
  <p class="lead">Ceci est la page d'accueil</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="/vehicules.php" role="button">Voir les véhicules</a>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>