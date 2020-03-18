<?php
try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=hiking;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

	$modif=$_GET['modif'];
	$update=$bdd->query("SELECT * FROM hiking WHERE name='$modif' ");
	$data = $update->fetch(PDO::FETCH_ASSOC);
	echo print_R($data);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<!-- <a href="/php-pdo/read.php">Liste des données</a> -->
	<h1>Modifier</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?= $data['name']	?>">
		</div>
		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
					<option value="Très facile" <?php if($data['difficulty']=='Très facile'){echo "selected";} ?>>Très facile</option>
					<option value="Facile" <?php if($data['difficulty']=='Facile'){echo "selected";} ?>>Facile</option>
					<option value="Moyen" <?php if($data['difficulty']=='Moyen'){echo "selected";} ?>>Moyen</option>
					<option value="Difficile" <?php if($data['difficulty']=='Difficile'){echo "selected";} ?>>Difficile</option>
					<option value="Très difficile" <?php if($data['difficulty']=='Très difficile'){echo "selected";} ?>>Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="<?= $data['distance']	?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?= $data['duration']	?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?= $data['height_difference']	?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

