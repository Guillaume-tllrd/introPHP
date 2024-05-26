<?php
include('./includes/nav.php');

function saluer($nom) {
  return "Bonjour, " . $nom . "!<br>";
}
// qd on fait un return on ne peut plus faire echo ensuite car on sort de la fonction. 
echo saluer("Alice");
echo saluer("Bob");
?>