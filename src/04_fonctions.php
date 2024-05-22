<?php
include('./includes/nav.php');

function saluer($nom) {
  return "Bonjour, " . $nom . "!<br>";
}

echo saluer("Alice");
echo saluer("Bob");
?>