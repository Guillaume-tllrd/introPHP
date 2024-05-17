<?php
include('./includes/nav.php');

function saluer($nom) {
  return "Bonjour, " . $nom . "!";
}

echo saluer("Alice");
?>