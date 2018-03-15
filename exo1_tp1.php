<!DOCTYPE html>
<html>
<head>
	<title> Formulaire </title>
</head>

 <body>
        <div class="menu"> </div>
        <div class="page">
        <h1> Formulaire </h1>
        <br> <br>

        <center>
                 <?php
                      if (isset($_POST ('prenom')))
                      {
                      	$prenom = $_POST ('prenom') ;
                      	echo " <font color =\"red\"> Bonjour;
                      	echo $prenom ;
                      	echo "! </font>
                      } 
                  ?> 
        </center>
        </div>
</body>
</html>