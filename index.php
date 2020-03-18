<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (isset($_GET['ville']) && isset($_GET['bas']) && isset($_GET['haut'])){
    $resultat = $bdd->prepare('INSERT INTO météo(ville,haut,bas)VALUES(:ville,:haut,:bas)');
        $resultat->execute(array(
            'ville' => $_GET['ville'],
            'bas' => $_GET['bas'] ,
            'haut' => $_GET['haut'] , 
            ));
        };
$resultat = $bdd->query('DELETE FROM météo WHERE id= 6');



$resultat = $bdd->query('SELECT * FROM météo');
echo "<table >
    <tr>
        <td>ville</td>
        <td>haut</td>
        <td>bas</td>
    </tr>   ";
while ($donnees = $resultat->fetch())
{
    echo "
    
    <tr>
        <td> $donnees[ville] </td>
        <td>$donnees[haut] </td>
        <td>$donnees[bas] </td>
        <td><input type=\"checkbox\" name=\"check\"></td>
    </tr>
    ";
}
echo " </table>" ;


?>


<form action="" method="GET">
<label for="">Ville</label>
<input type="text" name="ville">
<label for="">haut</label>
<input type="text" name="bas">
<label for="">bas</label>
<input type="text" name="haut">
<input type="submit">

</form>
