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
    'SELECT * FROM clients 
    WHERE id ="5"'
    );
$data=$resp->fetch();
// print_r($data);

$update=$bdd->prepare(
    'UPDATE clients 
    SET firstName = :firstName ,lastName = :lastName 
    WHERE firstName="Kibo"');
    
if(isset($_GET["submit"])){
    $update->execute([
        'firstName' => $_GET["firstName"],
        'lastName' => $_GET["lastName"],
    ]);
    echo $_GET['lastName'];
    echo $_GET['firstName'];
    }
    // Nicolas Monteiro