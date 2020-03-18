<?php 
require("CRUD2_7.php");
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
    <form action="CRUD2_7.php" method="GET">

        <label for="id">Numéro client:</label><br>
        <input type="text" name="id" value =<?= $data[0]["id"]?> ><br>

        <label for="lastName">nom</label><br>
        <input type="text" name="lastName" value =<?= $data[0]["lastName"]?> ><br>
    
        <label for="Firstname">prénom</label><br>
        <input type="text" name="firstName" value =<?= $data[0]["firstName"]?>><br>
    
        <label for="birthDate">date de naissance</label><br>
        <input type="text" name="birthDate" value =<?= $data[0]["birthDate"]?>><br>
    
        <label for="card">Card de fidelité</label><br>
        <input type="checkbox" name="card" value =<?= $data[0]["card"]?>  <?php if($data[0]["card"]==1){echo "checked";} ?>><br>
    
        <label for="nCard">N° card</label><br>
        <input type="text" value =<?= $data[0]["cardNumber"]?>><br>
    </form>

    <hr>

    <form action="CRUD2_7.php" method="GET">

        <label for="id">Numéro client:</label><br>
        <input type="text" name="id" value =<?= $data[1]["id"]?> ><br>

        <label for="lastName">nom</label><br>
        <input type="text" name="lastName" value =<?= $data[1]["lastName"]?> ><br>

        <label for="Firstname">prénom</label><br>
        <input type="text" name="firstName" value =<?= $data[1]["firstName"]?>><br>

        <label for="birthDate">date de naissance</label><br>
        <input type="text" name="birthDate" value =<?= $data[1]["birthDate"]?>><br>

        <label for="card">Card de fidelité</label><br>
        <input type="checkbox" name="card" value =<?= $data[1]["card"]?> <?php if($data[1]["card"]==1){echo "checked";} ?>><br>

        <label for="nCard">N° card</label><br>
        <input type="text" value =<?= $data[1]["cardNumber"]?>><br>

        <input type="submit" name="submit" value="Supprimer">
</form>


    

    </form>
</body>
</html>
