<!DOCTYPE html>
<html>
<head>
	<title> LISTES </title>
</head>


 <body>

 	   <center>
      <fieldset style="width:80% border="75%" >
        <legend> Informations </legend>
          <form  action="traitement.php" method="post">
            <input type="text" name="nom" required placeholder="Nom" value="">
          
            <input type="submit" name="submit" value="Valider">
          </form>
      </fieldset>
    </center>


      <?php
      $creationfichier 
       if (isset ($_GET ['nom']))
       	$recup_nom = $_GET ['nom'] ;
       {
        $fichier = fopen ('classement.txt')
       }
        ?>
      
       

