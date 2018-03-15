<!DOCTYPE>

<html>
		<head>
			<title> Tableau </title>
		</head>


		<body>
               <?php
               echo "<h2 align = center> On va s'amuser avec les tableaux </h2>";
               echo "</br>";

               $informations = array 
                                   (
                                   	'Nom' => 'Ndiaye' , 
                                   	'Prenom' => 'Aida', 
                                   	'Classe' => 'DSTI2', 
                                    'DDN' => '14-04-1998',
                                    'Nationalite' => 'Senegalaise',
                                    'Sexe' => 'Feminin'
                                   );


               foreach($informations as $cle => $element)
					{
					    echo '<table border = 1 align = center > <tr> <td> ' 
					    . $cle . 
					    ' &nbsp&nbsp&nbsp&nbsp</th> 
					    <td> &nbsp&nbsp&nbsp&nbsp' 
					    . $element .
					    ' &nbsp&nbsp  </td> </tr> </table> '  ;
					}

                ?>
                
		</body>

</html>