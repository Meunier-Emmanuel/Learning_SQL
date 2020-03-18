<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$res = $bdd->query('SELECT * FROM clients 
LEFT JOIN cards ON clients.cardNumber = cards.cardNumber where clients.card = "1" AND cards.cardTypesid ="1" ' );
// $res = $bdd->query('SELECT * FROM clients 
// INNER JOIN cards ON clients.cardNumber = cards.cardNumber 
// INNER JOIN cardType ON clients.card' );

$donnees=$res->fetchALL(PDO::FETCH_ASSOC);

    echo '<pre>';
        print_r($donnees);
    echo '<pre>';



    if(!empty($_GET['card']))
    {
        $_GET['card']=1;
        
    } else
    {
    $_GET['card']=0;
    $_GET['nCard']= null;
    }

    
    $result=$bdd->prepare('INSERT INTO clients(lastName,firstName,birthDate,card,cardNumber) VALUES(:lastName,:firstName,:birthDate,:card,:nCard)');
    $result->execute(
        [
            'lastName' => $_GET['lastName'],
            'firstName' => $_GET['firstName'],
            'birthDate' => $_GET['birthDate'],
            'card' => $_GET['card'],
            'nCard' => $_GET['nCard'],
        ]
        );
    



?>