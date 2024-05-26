<?php
include('./includes/nav.php');

echo "Boucle for<br>";
for ($i = 1; $i < 76; ++$i) {
  echo "Nombre : $i<br>";
}

echo "Boucle while<br>";
$i = 1;
while ($i < 5) {
  echo "Nombre : $i<br>";
  $i++;
}

echo "Boucle foreach (tableaux indexés)<br>";
$animaux = array("Chien", "Chat", "Poisson", "Crevette");
echo $animaux[0];
foreach ($animaux as $animal) {
  echo "$animal<br>";
}

echo "Boucle foreach (tableau associatif)<br>";
$animaux_assoc = array(
  "Chien" => "Médor",
  "Chat" => "Garfield",
  "Poisson" => "Nemo"
);
foreach ($animaux_assoc as $type => $nom) {
  echo "$nom est un $type<br>";
}

echo "Boucle foreach (tableaux associatifs) avec plusieurs propriétés<br>";
$animaux_multi = array(
  array("nom" => "Médor", "type" => "Chien", "age" => 5),
  array("nom" => "Garfield", "type" => "Chat", "age" => 3),
  array("nom" => "Nemo", "type" => "Poisson", "age" => 1)
);
echo "<pre>";
var_dump($animaux_multi);
print_r($animaux_multi);
echo "</pre>";
foreach ($animaux_multi as $animal) {
  echo $animal["nom"] . " est un " . $animal["type"] . " qui a " . $animal["age"] . " ans.<br>";
}

$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];
foreach ($produits as $clef => $produit){
    echo 'Produit : ' .$clef. '<br>';
    foreach($produit as $caracteristique => $valeur){
        echo $caracteristique. ' : ' .$valeur. '<br>';
    }
    echo '<br>';
    // ex: Produit: Livre
    // poids: 200
    // quantite: 10
    // prix : 15
}

$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre@pierre-martin.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
];
foreach($utilisateurs as $nb => $infos){
    echo 'Utilisateur n°' .($nb + 1). ' :<br>';
    foreach ($infos as $c => $v){
        echo $c. ' : ' .$v. '<br>';
    }
    echo '<br>';
    //ex: Uilisateur n°1:
    // nom: Mathilde
    // mail: math@gmail.com
}
?>