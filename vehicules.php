<?php
$title = "Les véhicules";
require_once 'views/layout/header.php';
require_once 'functions/vehicules.php';

$vehicules = getVehicules();
?>

<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($vehicules as $vehicule) {
      require 'views/vehicules/item.php';
    }
    ?>
  </div>
</div>

<?php require_once 'views/layout/footer.php'; ?>