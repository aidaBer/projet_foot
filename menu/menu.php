<?php 
$entree=$_GET['ent'];
$plats=$_GET['plat'];
$dessert=$_GET['dess'];
$boisson=$_GET['boiss'];

  echo "<center>";
  echo "<h1> Votre commande  <h1> <br>";
           switch ($entree) {
           	case '1':
           		$resentre=2000;
              echo "Salade de thon................................................................................2000F<br>";
           		break;


           	case '2':
           		$resentre=2200;
              echo "Choux a la sauce bechamelle...........................................................2200F<br>";
           		break;


           	case '3':
           		$resentre=2400;
              echo " Salade de legumes............................................................................2400F<br>";
           		break;


           	case '4':
           		$resentre=1800;
              echo "Oeuf garni.........................................................................................1800F<br>";
           		break;


           	default:
           		$resentre=0;
           		echo "Vous n'avez pas choisi d'entreé";
           		break;

           }
           switch ($plats) {
           	case '1':
           		$resplats= 7000;
              echo "Filet de boeuf..................................................................................7000F<br>";
           		break;

           	case '2':
           		$resplats= 8500;
              echo " Brochettes mix................................................................................8500F<br>";
           		break;

           	case '3':
           		$resplats= 9000;
              echo "..............................................................................................6500F<br>";
           		break;

           	case '4':
           		$resplats= 6500;
              echo "Poulet braise....................................................................................8000F<br>";
           		break;

           	case '5':
           		$resplats= 8000;
              echo "Gambas Provincale..............................................................................................6500F<br>";
           		break;

           	case '6':
           		$resplats= 6000;
              echo " Poisson braise.................................................................................6000F<br>";
           		break;

           	default:
           		$resplats=0;
           		echo "Vous n'avez pas choisi de plat";
           		break;
           }




           switch ($dessert) {
           	case '1':
           		$resdessert=3000;
              echo "Fondant Chocolat.............................................................................3000F<br>";
           		break;
           	case '2':
           		$resdessert=4500;
              echo "Dame blanche...................................................................................4500F<br>";
           		break;
           	case '3':
           		$resdessert=2500;
              echo "Gateaux.............................................................................................2500F<br>";
           		break;
           	case '4':
           		$resdessert=2000;
              echo "Salade de fruits..................................................................................2000F<br>";
           		break;
           	default:
           		$resdessert=0;
           		echo "Sans dessert";
           		break;
           }
           switch ($boisson) {
           	case '1':
           		$resboisson=2500;
              echo "Virgin Mojito..................................................................................2500F<br>";
           		break;
           	case '2':
           		$resboisson=1500;
              echo "Boisson gazeuze (Coca,Fanta,Sprite).............................................1500F<br>";
           		break;
           	case '3':
           		$resboisson=1000;
              echo "Jus locaux (Bouye, bissap, cocktail, ditakh )..................................1000F<br>";
           		break;
           	case '4':
           		$resboisson=800;
              echo "Eau minerale....................................................................................800F<br>";
           		break;
           	default:
           		$resboisson=0;
           		echo "Sans boissson";
           		break;
           }
           $add=$resentre+$resplats+$resdessert+$resboisson;
           echo "</br>";
           echo "Le Solde total de votre commande est : ".$add. "FCFA";

           echo "</center> ";
 ?>