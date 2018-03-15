<?php 
$dirPath = "/Users/macbookpro/Desktop/DSTI2" ;
if (! ($handle = opendir($dirPath) ) ) {
 die ("Cannot open the director") ;
}
 ?>

  <p>
  	 <?php 
      echo "$dirPath";
  	  ?>

  	  Contains the following files and folders
  	  <ul>
  	      <?php while ($file = readdir ($handle) ) {
            if ($file != "." and $file != "..")
              echo "<li> $file </li>";
  	      }  

  	      closedir ($handle) ; 
  	      ?> 
  	  </ul>
  </p>