<?php
		
//j'ai besoin de recuperer les valeur/place (des lettres envoye par l'utilisateur) dans la liste 

	// 1 - traiter le cas ou name est vide...
	// 2 - tout passer en minuscule
	$name = strtolower ($name);
	// 3 - virer les caracteres non desirables

	// debug !!
	// echo "name = $name";
	// echo "lettre 1: valeur ascii de $name[0] = " . ord($name[0]);
	// echo "lettre 2: valeur ascii de $name[1] = " . ord($name[1]);

	// solution 01
	// -97 / carac la val ascii de 'a' minuscule est 97 , donc on renorme de 0 a 25
	//$corps = ord($name[0]) - 97;
	//$yeux = ord($name[1]) - 97;
	//$bouche = ord($name[2]) - 97;


	// autre solution possible
	// mais c'est pas drole, toto, toti, totoro ont tous le meme visage
	// pour prendre en compte toutes les lettres et utiliser un nombre quelconque d'image:
	
	// obtenir une chaine hexa style 'd0be2dc42....' different d'une seul lettre changer dans $name
	$mon_hash = sha1($name);

	$corps = hexdec(substr($mon_hash, 0, 4))% 26;   

	// le substr retour par exemple 'd0be' , ensuite on convertit en entier avec hexdec, 
	// et on fait modulo le nombre d'images en stock. Ici tu as 27 images donc on fait %27 pour obtenir un nombre entre 0 et 26

	$yeux = hexdec(substr($mon_hash, 4, 4))% 26;  
	// idem pour le bas mais on prend les 4 caracteres suivants du hash

	$bouche = hexdec(substr($mon_hash, 9, 4))% 26;
?>
