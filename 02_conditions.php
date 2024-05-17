<?php
$heure = 14;
if ($heure < 12) {
  echo "Bonjour !";
} elseif ($heure < 18) {
  echo "Bon après-midi !";
} else {
  echo "Bonsoir !";
}
?>