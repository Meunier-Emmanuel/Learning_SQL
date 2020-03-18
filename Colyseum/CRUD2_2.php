<?php 
    try
    {
        $bdd = new PDO ('mysql:host=localhost;dbname=colyseum;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION));
    }
    catch(Exception $e )
    {
        die('ERREUR : '.$e -> getMessage());
    }

    $resp = $bdd -> 
    prepare('INSERT INTO clients (lastName,firstName,birthDate,card,cardNumber)     
    Values(:lastName,:firstName,:birthDate,:cardType,:cardNumber) ');
    $resp->execute(
        [
            'lastName' => $_GET['lastName'],
            'firstName' => $_GET['firstName'],
            'birthDate' => $_GET['birthDate'],
            'cardType' => $_GET['cardType'],
            'cardNumber' => $_GET['cardNumber']
        ]
        );



?>