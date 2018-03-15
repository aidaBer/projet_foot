<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  </style>
  <meta charset="utf-8">
</head>
<body>
<form name="changer" action="subrille.php" method="post" enctype="multipart/form-data">
  <input type="text" name="motif" placeholder="motif cherché"><br><br>
  <input type="file" name="fichier" >
  <input type="submit" name="" value="chercher">
  <input type="hidden" name="lefichier">
</form><br>
<?php
      if(!empty($_FILES) && isset($_REQUEST['motif'])){
    $ext=pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
    $a=array ("txt", "TEXT");
    if(in_array($ext, $a)){
        move_uploaded_file($_FILES['fichier']['tmp_name'], "fichier/".$_FILES['fichier']['name']);
        echo "fichier enregistrer<br><br>";
    $ouvrir=fopen($_FILES['fichier']['name'], "r");
    $motif=$_REQUEST['motif'];
    while(!feof($ouvrir)){
        //$ouv=fgets($ouvrir);
        $ouv=str_replace($motif, "<font color='red'>$motif</font>",fgets($ouvrir));
         echo $ouv."<br>";
      }
        fclose($ouvrir);
      }
    else
      echo "ce fichier n'est pas un texte";
    }

?>
</body>
</html>