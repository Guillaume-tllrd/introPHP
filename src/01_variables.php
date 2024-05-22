<?php
$nom = "John"; // string (chaîne de caractères)
$age = 25; // int (nombre entier)
$taille = 1.75; // float (nombre décimal)
$disponible = false; // booléen

// liste d'animaux de compagnie (tableau indexé)
$animaux = array("Chien", "Chat", "Poisson");

// liste d'animaux sous forme de tableau associatif
$animaux_assoc = array(
  "Chien" => "Médor",
  "Chat" => "Garfield",
  "Poisson" => "Nemo"
);

// liste d'animaux sous forme de tableau associatif avec plusieurs propriétés
$animaux_multi = array(
  array("nom" => "Médor", "type" => "Chien", "age" => 5),
  array("nom" => "Garfield", "type" => "Chat", "age" => 3),
  array("nom" => "Nemo", "type" => "Poisson", "age" => 1)
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables et types de données</title>
</head>
<body>
  <?php include_once('./includes/nav.php') ?>

  <h1>Variables et types de données</h1>
  <p><?= $nom . " a " . $age . " ans et mesure " . $taille . "m." ?></p>
  <p><?= "{$nom} a {$age} ans et mesure {$taille}m." ?></p>
  <p><?= "$nom a $age ans et mesure $taille m et \$nom s'affiche comme ça." ?></p>
</body>
</html>