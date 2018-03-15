<?php 
session_start();
if($_SESSION['pseudo'])
{
	$_SESSION['pseudo'];
}
else
{
	header('location:index.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Users-Administrateur</title>
</head>
<body>
<header><h2>Users-Administrateur</h2>
<label style="margin-left:1200px;color:green;"><?php echo $_SESSION['pseudo']; ?></label></header>
<div>
	<?php include('menu.php'); ?>
</div>
<fieldset>
	<legend>Ajout Users</legend>
	<form action="add_users.php" action="POST">
		<select name="status">
		<option>Selectionner le pseudo à valider</option>
			<?php 
			$connect=mysqli_connect("localhost","root","passer") or die("Erreur de connexion au serveur");
			if($connect)
{
	mysqli_select_db($connect,"gestion_photos") or die("Erreur de connexion à la base de données");
	$req="SELECT * from utilisateur";
	$query=mysqli_query($connect,$req) or die (mysqli_error());
	while($data=mysqli_fetch_array($query))
	{
			 ?>
			 <option value="<?php echo $data['pseudo']; ?>"><?php echo $data['pseudo']; ?></option>
			 <?php 
}
}

			  ?>
		</select>
		<button type="submit">Afficher</button>
	</form>
</fieldset>
</body>
</html>