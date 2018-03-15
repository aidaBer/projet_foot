<html>
<body> 
<h2> A simple hit counter </h2>
<?php

$counterFile = "./count.dat" ;
if (!file_exists ($counterFile) ) {
	if ( ! ($handle = fopen ($counterFile, "w") ) ) {
		die ("Cannot create the counter file. ") ;
	}

	else {
		fwrite($handle, "0" ) ;
		fclose($handle) ;

	}

}

if (! ($ handle = fopen ($counterFile, "r") ) )
{
  die ("Cannot create the counter file. ") ;	
}

$counter = (int) fread($handle, 20) ; 
fclose($handle) ;

$counter++ ;
echo "<p> You're visitor No. $counter. </p>" ;

if ( ! ($handle = fopen ($counterFile, "w")))
{
	die ("cannot open the counter file for writing. ") ;

}

fwrite($handle, $counter) ;
fclose($handle) ;
		?>

		</body>
		</html>
	
