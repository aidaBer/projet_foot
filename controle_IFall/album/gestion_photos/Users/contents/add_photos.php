<?php 
session_start();
if($_SESSION['pseudo'])
{
	$_SESSION['pseudo'];
}
else
{
	header('location:../index.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Ajouter photo</title>
</head>
<body>
<div>
	<form action="ajout.php" enctype="multipart/form-data">
		<label>Choisir une image:</label><br><br>
		<input type="file" name="img">
		<button type="submit">Valider</button>
	</form>
</div>
</body>
</html>