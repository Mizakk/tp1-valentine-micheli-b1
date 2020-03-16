<?php

(empty($_POST) ||
  empty($_POST['nom_vehicule']) ||
  empty($_POST['annee']) ||
  empty($_POST['nb_km'])) && exit("Requête invalide");

require_once 'functions/new.php';
$title = "Ajout";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php if (insertAjout($_POST['nom_vehicule'], $_POST['annee'], $_POST['nb_km'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci! Votre éstimation :
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de votre demande
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>