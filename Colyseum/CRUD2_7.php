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
    WHERE id ="25" OR id="24"'
    );
$data=$resp->fetchALL();
// print_r($data);

$del=$bdd->prepare(
    'DELETE FROM clients 
    WHERE id="25" OR id ="24"');
    
if(isset($_GET["submit"])){
    $del->execute();
    }
    // Nicolas Monteiro