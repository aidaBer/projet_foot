<!DOCTYPE html>
<html>
	<head>
		<title> Formulaire </title>
	</head>

	<body>
		    <? if  (!isset($_REQ ['nom']) &&  ($_GET ['prenom']) && ($_GET ['age'])) { 
		    	?>
		            
				   
            

			 


            <form method="get" action="formulaire.php">
            	   <fieldset>
            	   	          <legend> formulaire </legend>
            	   	          <input type="text" name="nom"> Votre Nom 
            	   	      </br>
            	   	          <input type="text" name="age"> Votre age
            	   	      </br>
            	   	          <input type="text" name="prenom"> Votre Prenom
            	   	      </br>
            	   	        <input type="submit" value="Envoyer"> 
            	   </fieldset>
            </form>

            <?
				   }
				    else 
				    {
				    $a = $_GET ['nom'] ;
				    $a = $_GET ['prenom'] ;
				    $c = $_GET ['age'] ;
				    echo 'Bonjour ' . $b .' '. $a.  'Vous avez' . $c . 'ans' ;
				    echo "</br>";
				    }
		    ?>

		    
	</body>
</html>