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
	<title>Accueil</title>
</head>
<body>
<header><h2>Accueil</h2>
<label><?php echo $_SESSION['pseudo']; ?></label>
</header>
<div><?php include('menu.php'); ?></div>
</body>
</html>