<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Inscription</title>
</head>
<body>
<header>
	<h2>Inscription</h2>
</header>
<fieldset>
	<legend>Inscription</legend>
	<form action="valider_inscription.php" method="POST">
		<label>Prénom</label><br>
		<input type="text" name="prenom" required><br><br>
		<label>Nom</label><br>
		<input type="text" name="nom" required><br><br>
		<label>Pseudo</label><br>
		<input type="text" name="pseudo" required><br><br>
		<label>Password</label><br>
		<input type="Password" name="mdp" required><br><br><br><br>
		<button type="submit">Valider</button>
	</form>
</fieldset>
</body>
</html>