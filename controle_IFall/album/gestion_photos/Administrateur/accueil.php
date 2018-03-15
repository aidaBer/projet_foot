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
	<title>Accueil</title>
</head>
<body>
<header><h2>Accueil-Administrateur</h2>
<label style="margin-left:1200px;color:green;"><?php echo $_SESSION['pseudo']; ?></label>
</header>
<div>
	<?php include('menu.php') ?>
</div>
</body>
</html>