<?php
  function formulaire(){
      ?>
        <center>
          <fieldset style="width:50%">
            <legend>Formulaire (fonctions)</legend>
              <form  action="traitement.php" method="post">
                <input type="text" name="nom" required placeholder="Nom" value=""><br />
                <input type="number" required name="age" placeholder="Age" value=""><br />
                <input type="submit" name="submit" value="Valider">
              </form>
          </fieldset>
        </center>
    <?php
  }
  function traitement(){
        $nom = $_REQUEST["nom"];
        $age = $_REQUEST["age"];
        $ch = "Bonjours ".$nom." vous avez ".$age;
        echo $ch;
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Fonction</title>
     <style media="screen">
       input{
         width:100%;
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
       if(isset($_REQUEST["submit"])){
         traitement();
       }else{
         formulaire();
       }
     ?>
   </body>
 </html>
