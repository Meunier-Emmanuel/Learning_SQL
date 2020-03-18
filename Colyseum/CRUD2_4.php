<?php 
    try
    {
        $bdd = new PDO ('mysql:host=localhost;dbname=colyseum;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION));
    }
    catch(Exception $e )
    {
        die('ERREUR : '.$e -> getMessage());
    }

    
    $resp=$bdd->query('SELECT * FROM clients WHERE firstName = "Gabriel"');

    $data=$resp->fetch(PDO::FETCH_ASSOC);
    print_r($data);
    
    
    $update=$bdd->prepare('UPDATE clients SET birthDate = :birthDate WHERE firstName="Gabriel"');
    
    if(isset($_GET["submit"])){
        $update->execute([
            'birthDate' => $_GET["birthDate"],
        ]);
        echo $_GET['birthDate'];
    }
    

?> 

