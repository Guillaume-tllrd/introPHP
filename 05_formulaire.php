<!DOCTYPE html>
<html>
<body>
  <form method="post" action="traitement.php">
    Nom : <input type="text" name="nom">
    Âge : <input type="text" name="age">
    <input type="submit" value="Envoyer">
  </form>
  <?php
    if (isset($_POST)) {
      echo "Nom : " . $_POST["nom"] . "<br>";
      echo "Âge : " . $_POST["age"] . "<br>";
    }
  ?>
</body>
</html>