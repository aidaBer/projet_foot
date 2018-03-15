<!DOCTYPE html>
<html>
<head>
	<title> Premier programme </title>
</head>
	<body>

		 <?php 

             echo "<h1> <center> Bonjour tout le monde <center></h1>";
             echo "<br>"; 
             //echo "<table> <td> <tr>";
              
             for ($i = 2; $i <=12 ; $i++) {
                  echo "<strong>Table de $i </strong>"; 
                   echo "<br>";
             	 for ($j=1; $j <= 10 ; $j++) { 
             	    echo $i . "x" . $j . "=" . $i*$j . "<br> "; 	
             	 }
             	  echo "<br>";   
             }
             //echo "</table> </td> </tr>";
             $Coordonnes ["PRENOM"]= "aida" ;   
             $Coordonnes ["NOM"]= "Ndiaye" ;
             $Coordonnes ["Classe"]= "DSTI" ;

             echo "PRENOM" ;

		  ?>

	</body>
</html> 