<!-- Admin -->
<?php
$title = "admin";
?>

<!-- Contenu -->
<div class="container mt-4">
    <h1>Véhicules</h1>
    <form method="POST" action="admin.php">
        <input type="checkbox" name="visible"> Visible
        <input type="checkbox" name="novisible"> Non visible
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
<!-- Fin contenu -->