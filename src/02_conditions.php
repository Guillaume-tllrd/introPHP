<?php
include('./includes/nav.php');

$heure = 14;
if ($heure < 12) {
  echo "Bonjour !";
} elseif ($heure == 14) {
  echo "<div style='color:yellowgreen;'>Ah, 14h c'est l'heure de la sieste, youpi!</div>";
} elseif ($heure  < 18) {
  echo "Bon après-midi !";
} else {
  echo "Bonsoir !";
}
?>