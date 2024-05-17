<?php
// Boucle for
for ($i = 0; $i < 5; $i++) {
  echo "Nombre : $i<br>";
}

// Boucle while
$i = 0;
while ($i < 5) {
  echo "Nombre : $i<br>";
  $i++;
}

// Boucle foreach (tableaux indexés)
$animaux = array("Chien", "Chat", "Poisson");
foreach ($animaux as $animal) {
  echo "Animal : $animal<br>";
}

// Boucle foreach (tableau associatif)
$animaux_assoc = array(
  "Chien" => "Médor",
  "Chat" => "Garfield",
  "Poisson" => "Nemo"
);
foreach ($animaux_assoc as $type => $nom) {
  echo "$nom est un $type<br>";
}

// Boucle foreach (tableaux associatifs), exemple avec plusieurs personnes qui ont un prénom, un nom et un âge
$animaux_multi = array(
  array("nom" => "Médor", "type" => "Chien", "age" => 5),
  array("nom" => "Garfield", "type" => "Chat", "age" => 3),
  array("nom" => "Nemo", "type" => "Poisson", "age" => 1)
);
foreach ($animaux_multi as $animal) {
  echo $animal["nom"] . " est un " . $animal["type"] . " qui a " . $animal["age"] . " ans<br>";
}
?>