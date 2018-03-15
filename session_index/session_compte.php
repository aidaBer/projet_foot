
 <?php 
	session_start();
	if (! isset($_SESSION["compteur"])){
		$_SESSION["compteur"]=1;
		$_SESSION["temps"]= time();
	}
	else{
		if ((time() - $_SESSION["temps"])>10 ){
			session_destroy();
			die("Delai depasse");
		}
		$_SESSION["compteur"]++;
		$_SESSION["temps"]=time();
	}

	?>

	Vous etes venus <?php echo $_SESSION["compteur"]; ?> fois

	<form action="connexion.php"> <input type="submit" value="continuer"> </form>