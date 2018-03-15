<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_REQUEST["submit"])){
        $nom = $_REQUEST["nom"];
        $age = $_REQUEST["age"];
        $ch = "Bonjours ".$nom." vous avez ".$age;
        echo $ch;
      }else{
        header("Location:formulaire.html");
      }
    ?>
  </body>
</html>
