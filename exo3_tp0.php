<?php
    $author = "Steve Balimer" ;
    echo " Developers, Developers,Developers,Developers,Developers,Developers
        $author." ;
 ?> <br>


 <?php 
 $number = 12345 * 67890 ;
 echo substr($number, 3,5); ?> <br>
 <!-- la fonction substr permet de recuperer une chaine de caractere. Apres avoir fait le le calcul pour number, on trouve 838 102 050. Si on met ($number, 3,5), ca permet de recuperer 5 lettre en partant du trosieme caractere. On aura pour resultat 10205 !-->

 <?php
 $pi = "3.1415927" ;
$radius = 5 ;
echo $pi * ($radius * $radius); 
  ?>
