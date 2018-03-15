<?php 
$ent=$_GET['ent'];
$plat=$_GET['plat'];
$dess=$_GET['dess'];
$boiss=$_GET['boiss'];
           switch ($ent) {
           	case '1':
           		$ent=2000;
           		break;
           	case '2':
           		$ent=2200;
           		break;
           	case '3':
           		$ent=2400;
           		break;
           	case '4':
           		$ent=1800;
           		break;
           	default:
           		$ent=0;
           		echo "Vous n'avez pas choisi d'entré";
           		break;
           }
           switch ($plat) {
           	case '1':
           		$plat= 7000;
           		break;
           	case '2':
           		$plat= 8500;
           		break;
           	case '3':
           		$plat= 9000;
           		break;
           	case '4':
           		$plat= 6500;
           		break;
           	case '5':
           		$plat= 8000;
           		break;
           	case '6':
           		$plat= 6000;
           		break;
           	default:
           		$plat=0;
           		echo "Vous n'avez pas choisi de plat";
           		break;
           }
           switch ($dess) {
           	case '1':
           		$dess=3000;
           		break;
           	case '2':
           		$dess=4500;
           		break;
           	case '3':
           		$dess=2500;
           		break;
           	case '4':
           		$dess=2000;
           		break;
           	default:
           		$dess=0;
           		echo "Vous n'avez pas choisi de dessert";
           		break;
           }
           switch ($boiss) {
           	case '1':
           		$boiss=2500;
           		break;
           	case '2':
           		$boiss=1500;
           		break;
           	case '3':
           		$boiss=1000;
           		break;
           	case '4':
           		$boiss=800;
           		break;
           	default:
           		$boiss=0;
           		echo "Vous n'avez pas choisi de boisson";
           		break;
           }
           $add=$ent+$plat+$dess+$boiss;
           echo "Le Solde total de votre commande est : ".$add;
 ?>