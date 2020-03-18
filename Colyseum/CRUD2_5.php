<?php 
    try
    {
        $bdd = new PDO ('mysql:host=localhost;dbname=colyseum;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION));
    }
    catch(Exception $e )
    {
        die('ERREUR : '.$e -> getMessage());
    }

$resp = $bdd->query(
    'SELECT * FROM shows 
    WHERE id ="1"'
    );
$data=$resp->fetch();
// print_r($data);

$update=$bdd->prepare(
    'UPDATE shows 
    SET date = :date ,startTime = :startTime 
    WHERE firstName="vestibulum accumsan"');
    
if(isset($_GET["submit"])){
    $update->execute([
        'date' => $_GET["date"],
        'startTime' => $_GET["startTime"],
    ]);
    echo $_GET['startTime'];
    echo $_GET['date'];
    }
    // Nicolas Monteiro