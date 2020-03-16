<?php
$title = "Ajout";
require_once 'views/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
  <h1>Ajoutez et estimez votre véhicule!</h1>
  <form action="new_process.php" method="POST">
    <div class="form-group">
      <label for="nom_vehicule">Nom du véhicule</label>
      <input type="text" class="form-control" id="nom_vehicule" name="nom_vehicule" aria-describedby="nom_vehiculeHelp">
      <small id="nom_vehiculeHelp" class="form-text text-muted">Entrez le nom du véhicule</small>
    </div>
    <div class="form-group">
      <label for="annee">Année</label>
      <input type="text" class="form-control" id="annee" name="annee" aria-describedby="anneeHelp">
      <small id="anneeHelp" class="form-text text-muted">Entrez l'année de sortie de votre véhicule</small>
    </div>
    <div class="form-group">
      <label for="nb_km">Nombre de kilomètres</label>
      <input type="text" class="form-control" id="nb_km" name="nb_km" aria-describedby="nb_kmHelp">
      <small id="nb_kmHelp" class="form-text text-muted">Entrez le nombre de km de votre véhicule</small>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>