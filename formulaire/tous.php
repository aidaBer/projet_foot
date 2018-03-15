<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tous</title>
    <style media="screen">
      input{
        width:90%;
        margin-bottom: 10px;
        padding: 5px;
      }
      input[type="submit"]{
        cursor: pointer;
        width: 50%;
      }
    </style>
  </head>
  <body>
    <?php
      function
      if(isset($_REQUEST["submit"])){
        $nom = $_REQUEST["nom"];
        $age = intval($_REQUEST["age"]);
        if(empty($nom)){
          $erros["nom"]="le nom ne doit pas être vide";
        }if(empty($age)){
          $errors["age"]="l'age doit être defini";
        }else{
          if($age>150)
        }
        $ch = "Bonjours ".$nom." vous avez ".$age;
        echo $ch;
      }else{
    ?>
    <center>
      <fieldset style="width:50%">
        <legend>Formulaire (tous)</legend>
          <form  action="traitement.php" method="post">
            <input type="text" name="nom"  placeholder="Nom" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>">
            <input type="number"  name="age" placeholder="Age" value="">
            <input type="submit" name="submit" value="Valider">
          </form>
      </fieldset>
    </center>
    <?php } ?>
  </body>
</html>
