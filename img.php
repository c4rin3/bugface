<?php 
	// conseil : la commande header toujours au max en haut si possible
	// car certaines commandes php, font que le header est envoye
	// et donc tu peux pas le renvoyer de nouveau (dans certains cas a peut etre 1 probleme)

	header('Content-type: image/png');

	$folder = 'img/';

	$corps = $_GET['corps']; // ici c'est du get (variables visibles dans l'uri)
	$yeux = $_GET['yeux'];
	$bouche = $_GET['bouche'];

	// 1 - verifier que les valeurs num de /corps/ et /yeux/ sont dans les normes

	// L'image finale
	$iFinale = imagecreatetruecolor(283,283);

	// Recuperation des images sources
	$iCorps = imagecreatefrompng($folder.'corps-'.$corps.'.png');
	$iYeux = imagecreatefrompng($folder.'yeux-'.$yeux.'.png');
	$iBouche = imagecreatefrompng($folder.'bouche-'.$bouche.'.png');

	// Coller l'image /du corps/ dans l'image finale
	imagecopy($iFinale, $iCorps, 0, 0, 0, 0, 283, 283);

	// Coller l'image /des yeux/ dans l'image finale
	imagecopy($iFinale, $iYeux, 0, 0, 0, 0, 283, 283);

	// Coller l'image /de la bouche/ dans l'image finale
	imagecopy($iFinale, $iBouche, 0, 0, 0, 0, 283, 283);

	// Affichage et liberation de la memoire
	imagepng($iFinale);
	imagedestroy($iFinale);
?>
