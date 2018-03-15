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
	<title>Affiche</title>
</head>
<body>
<header>
	<h2>Affichage</h2>
</header>
<?php 
$pseudo=$_SESSION['pseudo'];
$connect=mysqli_connect("localhost","root","passer") or die();
if($connect)
{
	mysqli_select_db($connect,"gestion_photos") or die();
	$req="SELECT * from where pseudo='$pseudo'";
	$query=mysqli_query($connect,$req) or die(mysqli_error());
	while($data=mysqli_fetch_array($query))
	{
 ?>
 <span>
 	<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data['image']).'">' ?>
 </span>
 <?php 
}
}
  ?>
</body>
</html>