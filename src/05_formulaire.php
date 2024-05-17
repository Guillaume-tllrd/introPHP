<!DOCTYPE html>
<html>
<body>
  <?php include('./includes/nav.php'); ?>
  <h1>Formulaire</h1>
  <form method="POST">
    Nom : <input type="text" name="nom">
    Âge : <input type="text" name="age">
    <input type="submit" value="Envoyer">
  </form>
  <?php
    if (!empty($_POST)) {
      var_dump($_POST);
      echo "<br>";
      echo "Nom : " . $_POST["nom"] . "<br>";
      echo "Âge : " . $_POST["age"] . "<br>";
    }

    
  ?>
</body>
</html>