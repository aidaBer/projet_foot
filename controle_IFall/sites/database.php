<?php
function connection()
{
	return new PDO('mysql:host=localhost;dbname=mes_sites;charset=utf8', 'root', 'root');
}

       function getSites()
	{
        $bdd = connection();
	    $req=$bdd->prepare("SELECT * FROM `site`");
	    $req->execute();
            $sites=$req->fetchAll();
	    $req->closeCursor();
	    return $sites;
	}



?>