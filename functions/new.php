<?php

require_once __DIR__ . '/db.php';

function insertAjout(
  string $nom_vehicule,
  string $annee,
  string $nb_km
) {
  $pdo = getPdo();

  $query = "INSERT INTO ajout (nom_vehicule, annee, nb_km) VALUES (:nom_vehicule, :annee, :nb_km)";

  $stmt = $pdo->prepare($query);

  return $stmt->execute([
    'nom_vehicule' => $nom_vehicule,
    'annee' => $annee,
    'nb_km' => $nb_km
  ]);
}