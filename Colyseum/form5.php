<?php 
require("CRUD2_5.php");
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
        <form action="CRUD2_5.php" method="GET">
            <label for="title">title</label><br>
            <input type="text" name="title" value ="<?= $data["title"]?>"><br>

            <label for="performer">performer</label><br>
            <input type="text" name="performer" value =<?= $data["performer"]?>><br>

            <label for="date">date</label><br>
            <input type="text" name="date" value =<?= $data["date"]?>><br>

            <label for="showTypesId">showTypesId</label><br>
            <input type="text" name="showTypesId" value =<?= $data["showTypesId"]?>><br>

            <label for="firstGenresId">firstGenresId</label><br>
            <input type="text" name="firstGenresId" value =<?= $data["firstGenresId"]?>><br>

            <label for="secondGenreId">secondGenreId</label><br>
            <input type="text" name="secondGenreId" value =<?= $data["secondGenreId"]?>><br>

            <label for="duration">duration</label><br>
            <input type="text" name="duration" value =<?= $data["duration"]?>><br>

            <label for="startTime">startTime</label><br>
            <input type="text" name="startTime" value =<?= $data["startTime"]?>><br>

            <input type="submit" name="submit">

        </form>
    </body>
</html>
