<?php 
$pseudo=$_POST['pseudo'];
$mdp=$_POST['mdp'];
$connect=mysqli_connect("localhost","root","passer") or die ("Erreur de connexion au serveur");
if($connect)
{
	mysqli_select_db($connect,"gestion_photos") or die("Erreur de connexion à la base de données");
	$req="SELECT * from utilisateur where pseudo='$pseudo'";
	$query=mysqli_query($connect,$req) or die (mysqli_error());
	$data=mysqli_fetch_assoc($query);
	if($data['mdp']==$mdp)
	{
		session_start();
		$_SESSION['pseudo']=$pseudo;
		header('location:contents/accueil.php');
	}
	else
	{
		include('index.php');
		echo 'Mauvais login ou mauvais mot de passe';
	}
}

 ?>