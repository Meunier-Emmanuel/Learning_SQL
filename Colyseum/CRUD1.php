<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// EX Afficher tous les clients.

$resultat = $bdd->query('SELECT firstName FROM clients');
echo '<h1>EX 1 </h1>';
echo "<p><strong>Afficher tous les clients.</strong></p>";
echo '<ul>';
while ($donnees = $resultat->fetch())
{
    echo '<li>'.$donnees['firstName'].'</li>' ;
}
echo '</ul>';

// EX SUIVANT Afficher tous les types de spectacles possibles


$resultat = $bdd->query('SELECT type FROM showtypes ');
echo '<h1>EX 2 </h1>';
echo "<p><strong>Afficher tous les types de spectacles possibles.</strong></p>";
echo '<ul>';
while ($donnees = $resultat->fetch())
{
	echo '<li>'.$donnees['type'].'</li>' ;
}
echo '</ul>';

// EX SUIVANT Afficher les 20 premiers clients.
$resultat = $bdd->query('SELECT firstName FROM clients LIMIT 0,20');
$i =0 ;

echo '<h1>EX 3 </h1>';
echo "<p><strong>Afficher les 20 premiers clients.</strong></p>";
echo '<ul>';
while ($donnees = $resultat->fetch())
{
    $i++;
    echo '<li>'.'Client '.$i.' : '. $donnees['firstName'].'</li>';
}
echo '</ul>';

// EX SUIVANT N'afficher que les clients possédant une carte de fidélité.

$resultat = $bdd->query('SELECT firstName,card FROM clients where card=1');

echo '<h1>EX 4 </h1>';
echo "<p><strong>N'afficher que les clients possédant une carte de fidélité.</strong></p>";
echo '<ul>';
while ($donnees = $resultat->fetch())
{
    echo '<li>'.$donnees['firstName'].'</li>';
}
echo '</ul>';


// EX SUIVANT Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".

$resultat = $bdd->query('SELECT firstName,lastName FROM clients where lastName LIKE "M%" ORDER BY lastName asc ');

echo '<h1>EX 5 </h1>';
echo "<p><strong>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre \"M\".</strong></p>";
echo '<ul>';
while ($donnees = $resultat->fetch())
{
    echo '<li>'.'Nom : '.$donnees['lastName'].'<br>'.'Prénom: '.$donnees['firstName'].'</li>' ;
}
echo '</ul>';

// EX SUIVANT Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.

$resultat = $bdd->query('SELECT title,performer,date,startTime FROM shows ORDER BY title ASC');

echo '<h1>EX 6 </h1>';
echo "<p><strong>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</strong></p>";

echo '<ul>';
while ($donnees = $resultat->fetch())
{
    echo '<li>'.'spectable : '.$donnees[0].'<br>'.'Performer: '.$donnees[1].'<br>'.'date : '.$donnees[2].'<br>'.'heure: '.$donnees[3].'</li>'.'<br>' ;
}
echo '</ul>';


// Afficher tous les clients comme ceci :

// Nom : *Nom de famille du client*
// Prénom : *Prénom du client*
// Date de naissance : *Date de naissance du client*
// Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
// Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*


$resultat = $bdd->query('SELECT * FROM clients ');

echo '<h1>EX 6 </h1>';
echo "<p><strong> Afficher tous les clients comme ceci :<br>
 Nom : *Nom de famille du client* <br>
 Prénom : *Prénom du client* <br>
 Date de naissance : *Date de naissance du client* <br>
 Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)* <br>
 Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*.</strong></p>";
echo '<ul>';
while ($donnees = $resultat->fetch())
{
    if(!$donnees['card'] == 0 ){
        $donnees['card']= "oui";
    }else{$donnees['card']="non";}
    echo '<li>'
    .'Nom : '.$donnees['lastName'].'<br>'
    .'prénom : '.$donnees['firstName'].'<br>'
    .'Date de naissace : '.$donnees['birthDate'].'<br>'
    .'Carte de fidélité : '.$donnees['card'].'<br>';
    if ($donnees['card']=== "oui")
    echo 'Numéro de carte : '.$donnees['cardNumber'].'<br>';

 
    echo '</li>'.'<br>' ;
}
echo '</ul>';
?>