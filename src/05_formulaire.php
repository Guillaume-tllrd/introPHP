<?php
  print_r($_GET);
  echo "<br>";
  print_r($_GET["nom"]);
  print_r($_GET["age"]);

  if (!empty($_POST)) {
    var_dump($_POST);
    echo "<br>";
    echo "Nom : " . $_POST["nom"] . "<br>";
    echo "Âge : " . $_POST["age"] . "<br>";
  }
?>
  // -----------NOUVELLE TECHNO -------------
  <form action="formaulaire.php" method="get">
    <div>
      <label for="number1" >Nombre 1 :</label>
      <input type="nombre" id="number1" name="nb1" >
    </div>
    <div>
      <label for="number2" >Nombre 1 :</label>
      <input type="nombre" id="number2" name="nb2" >
    </div>
    <button type="submit">Calculer</button>
  </form>

  <?php
  $total = $_GET["nb1"] + $_GET["nb2"];
  echo "<p> TOTAL : $total </p>";
?>
// --------------------------------------
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