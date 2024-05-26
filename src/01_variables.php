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
// ------------------- NOUVELLE TECHNO ---------
// Connaitre le contenu et le type d'une variable:
var_dump($animaux_multi);
//Extraire une partie de la chaîne: / comme JS
echo substr($nom, 0, 2);
// Remplacer une partie de la chaine:
$nom = str_replace("Jo", "pr",$nom);
// str_contains(); str_start_with($nom, "pr"); str_ends_with($nom, "n") ;
trim($nom); // enlever les espaces particuliers dans un string
// incrémenter nombre:
$age ++; //ou 
$age +=1;
// Décrémenter :
$age --;
$age -= 1;

// AJOUTER des valeurs à un tableau : 
array_push($animaux, "lapin", "pie");

// Si on veut ajouter une seule valeur : 
$animaux[]= "corbeau";

// Si on veut ajouter une seule valeur AU DEBUT:
array_unshift($animaux, "serpent");

// Supprimer la derniere valeur:
array_pop($animaux);

// Diviser le tableau en plusierus parties de 2 valeurs: 
$animaux2 = array_chunk($animaux, 2)

// Comaraison variable avec opérateur combiné:
$a = 54;
$b = 4;
$a <=> $b;
// < -> -1 if a < b;
// = -> 0 if a = b;
// > -> 1 if a > b;
switch($a <=> $b){
  case -1:
    echo "a plus petit que b";
    break;
  case 0:
    echo"a égale à b";
    break;
  case 1:
    echo "a est suppérieur à b";
    break;
}

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