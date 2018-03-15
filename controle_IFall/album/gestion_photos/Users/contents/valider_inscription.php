<?php 
ini_set('display_errors', 1);
    error_reporting(E_ALL);

$pseudo=$_POST['pseudo'];
$mdp=$_POST['mdp'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$connect=mysqli_connect("localhost","root","passer") or die("connection to server failed");
if($connect)
{
mysqli_select_db($connect,"gestion_photos") or die ("Connection to database failed");
$req="INSERT INTO utilisateur values('$pseudo','$mdp','$nom','$prenom')";
$query=mysqli_query($connect,$req) or die(mysqli_error());
if($query)
{
	include('../index.php');
	echo 'Vous pouvez vous connecter maintenant';
}
else
{
	include('inscription.php');
	echo 'Inscription echouée';
}
}
 ?>
