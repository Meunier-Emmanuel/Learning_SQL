<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=hiking;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$resp = $bdd->query('SELECT * FROM hiking');
$donnees=$resp -> fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiking </title>
</head>
<body>
    <table border>
        <tr>   
            <td>name</td>
            <td>difficulty</td>
            <td>distance</td>
            <td>duration</td>
            <td>height_difference</td>
        </tr>

        <?php
        foreach ($donnees as $key => $value) {
            echo "<tr>";
            echo '<td>'.'<a href='.'"'.'update.php?modif='.$value['name'].'"'.'>'.$value["name"].'</a>'.'</td>';
            echo '<td>'.$value["difficulty"].'</td>';
            echo '<td>'.$value["distance"].'</td>';
            echo '<td>'.$value["duration"].'</td>';
            echo '<td>'.$value["height_difference"].'</td>';
            echo "</tr>";
        }
        
        // echo "<td><a href='update.php?modif=$value'>$value</a></td>";
        ?>

    </table>

</body>
</html>

<?php
if (isset($_POST['name'])){
    $add = $bdd->prepare(
        'INSERT INTO hiking(name,difficulty,distance,duration,height_difference)
        VALUES(:name,:difficulty,:distance,:duration,:height_difference)
        ');
    $add->execute([
        'name' => $_POST['name'],
        'difficulty' => $_POST['difficulty'],
        'distance' => $_POST['distance'],
        'duration' => $_POST['duration'],
        'height_difference' => $_POST['height_difference']
    ]);
    echo "balade ajouté";
    
    }
require('create.php');
?>
