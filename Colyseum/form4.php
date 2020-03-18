<?php 
require("CRUD2_4.php");
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>form</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<form action="CRUD2_4.php" method="GET">
    <label for="lastName">nom</label><br>
    <input type="text" name="lastName" value =<?= $data["lastName"]?> ><br>
    <label for="Firstname">prénom</label><br>
    <input type="text" name="firstName" value =<?= $data["firstName"]?>><br>
    <label for="birthDate">date de naissance</label><br>
    <input type="text" name="birthDate" value =<?= $data["birthDate"]?>><br>
    <label for="card">Card de fidelité</label><br>
    <input type="checkbox" name="card" value =<?= $data["card"]?> <?php if($data["card"]==1){echo "checked";} ?>><br>
    <label for="nCard">N° card</label><br>
    <input type="text" value =<?= $data["cardNumber"]?>><br>
    <input type="submit" name="submit">
    </form>


    

    </form>
</body>
</html>
