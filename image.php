<!DOCTYPE html>
<html>
<head>
	<title></title>

   
  
</head>
<body>
<form  ENCTYPE="multipart/form-data" action="image.php" method="post"> 
<input name="im"  type="file">    
<input type="submit"  value="envoyer"> 
</form><br><br>
<?php
if(!empty($_FILES)){
   $ext=strtolower(pathinfo($_FILES['im']['name'], PATHINFO_EXTENSION));
   $tabext=array ("jpg", "png", "gif", "jpeg");
   if(in_array($ext, $tabext)){
      move_uploaded_file($_FILES['im']['tmp_name'], "img/".$_FILES['im']['name']);
      echo "image telecharger<br><br>";
    }
   else{
  echo "votre fichier n'est pas une image<br><br>";
   }
   $i=0;
   $afficher="img/";
   $ouvrir=opendir($afficher);
   while ($file = readdir($ouvrir)) {
         $ext=strtolower(pathinfo($file, PATHINFO_EXTENSION));
         $tabext=array ("jpg", "png", "gif", "jpeg");
         if(in_array($ext, $tabext)){
            $tab[$i]=$file; 
            $i++;         
          }
   }
   for ($j=0; $j <$i ; $j++) { 
         $a=5;
         if($j==$a){
          echo "<br><br>";
         }
         $a*=2;
         echo"<a href=''>"
      ?> <img src="img/<?php echo $tab[$j]; ?>" > <?php
         echo "</a>";
   }
   /*$afficher="img/";
   $ouvrir=opendir($afficher);
   while ($file = readdir($ouvrir)) {
         if(in_array($ext, $tabext))
          echo "<img src=\"$file\" width=\"20%\">";
   }*/
  }
  ?>
</body>
</html>