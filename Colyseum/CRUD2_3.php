<?php 
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8','root','');
    }
    catch(Exception $e)
    {
        die('error : '.$e->getMessage());
    }


    $sql=(
        'INSERT INTO shows(title,performer,date,showTypesId,firstGenresId,secondGenreId,duration,startTime)
        Values(:title,:performer,:date,:showTypesId,:firstGenresId,:secondGenreId,:duration,:startTime)'
        );
    $resp = $bdd ->prepare($sql);
    $resp -> execute([
        'title' => $_GET['title'],
        'performer' => $_GET['performer'],
        'date' => $_GET['date'],
        'showTypesId' => $_GET['showTypesId'],
        'firstGenresId' => $_GET['firstGenresId'],
        'secondGenreId' => $_GET['secondGenreId'],
        'duration' => $_GET['duration'],
        'startTime' => $_GET['startTime'],
    ]);

    ?>
