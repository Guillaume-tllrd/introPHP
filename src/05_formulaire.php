<?php
  // print_r($_GET);
  // echo "<br>";
  // print_r($_GET["nom"]);
  // print_r($_GET["age"]);

  // if (!empty($_POST)) {
  //   // var_dump($_POST);
  //   // echo "<br>";
  //   echo "Nom : " . $_POST["nom"] . "<br>";
  //   echo "Âge : " . $_POST["age"] . "<br>";
  // }
?>

<!DOCTYPE html>
<html>
<body>
  <?php include('./includes/nav.php'); ?>
  <h1>Formulaire</h1>
  <form method="GET">
    Nom : <input type="text" name="nom">
    Âge : <input type="text" name="age">
    <button>Envoyer</button>
  </form>
  
</body>
</html>