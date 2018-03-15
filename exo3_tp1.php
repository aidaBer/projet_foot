<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resolution Equation second degres </title>
</head>
<body>
	<h3 align="center"> RESOLUTION D'EQUATION DU SECOND DEGRES </h3>
	<p>Entrez les coefficients a,b et c pour la resolution de l'equation ax² + bx + c = 0 </p>
	<p>
		<form method="get">
			<label for="a">a</label>= <input type="text" name="nb1" id="a" /> (Doit etre different de 0)</br>
			<label for="b">b</label>= <input type="text" name="nb2" id="b" /></br>
			<label for="c">c</label> = <input type="text" name="nb3" id="c" /></br><br>
			<input type="submit" value="Cliquez pour avoir les solutions" />
		</form>
	</p>


	<?php 
			if (isset($_GET['nb1']) && ($_GET['nb2']) && ($_GET['nb3']))
			{
				
				$a=$_GET['nb1'];
				$b=$_GET['nb2'];
				$c=$_GET['nb3'];
				$delta=($b*$b) -(4*$a*$c);
				$racine_delta = (sqrt(-$delta)) ;
				$deno = 2*$a ;
				

				/*while (get_type ($a) = char) 
				{
					echo "Veillez saisir un nombre";
				}*/
			
					

			if ($delta < 0) 
			   {
			       
						echo "<b> L'equation admet deux solutions X1 et X2 danc C : ";
						echo "</br>";
						echo "X1 = ((-$b - i($racine_delta)/ ($deno) ) <br> / ($deno)";
						echo "</br>";
						echo "X2 = ((-$b + i($racine_delta) / (2*$a)) / (2*$a)" ;
						 

                } 


    		elseif ($delta == 0) {
                   $X=$b/(2*$a);
				  echo "l'equation admet  une unique solution double X :".$X ; 

    		}
                					
				

				elseif ($delta > 0) 
					{
						echo "<b> L'equation admet deux solutions X1 et X2 : </b>"."<br><br>";	
						$x1=(-$b + sqrt($delta))/(2*$a);
						$x2=(-$b - sqrt($delta))/(2*$a);
						echo " X1 = ".$x1 ;
						echo "</br>";
						echo "X2 = ".$x2;
					}
	       }
 ?>

</body>
</html>
