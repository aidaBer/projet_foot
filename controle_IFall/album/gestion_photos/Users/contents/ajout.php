<?php 
session_start();
if($_SESSION['pseudo'])
{
	$_SESSION['pseudo'];
}
$pseudo=$_SESSION['pseudo'];
$img=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
$connect=mysqli_connect("localhost","root","passer") or die ("Erreur de  connexion au serveur");
if($connect)
{
	mysqli_select_db($connect,"gestion_photos") or die("Erreur de connexion à la base de données");
	$req="INSERT INTO images values('','$pseudo','$img')";
	$query=mysqli_query($connect,$req) or die (mysqli_error($connect));
	if($query)
	{
		include('add_photos.php');
		echo 'photo ajoutée';
	}
	else
	{
		include ('add_photos.php');
		echo 'photo non enregistrée';
	}
}

 ?>