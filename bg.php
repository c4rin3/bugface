<?php 

	// generer un fond aleatoire (les cours de processing n'ont pas ete inutiles...)

	header('Content-type: image/png');
	$bgImage=imagecreate(40,40); 

	// definir des couleurs (la 1ere est utilisee comme fond de l'image)
	$blanc = imageColorAllocate($bgImage,255,255,255);
	//$noir = imageColorAllocate($bgImage,0,0,0);

	// dessiner (lignes horizontales + verticales)
	for($i=0; $i<40 ;$i= $i+2) {
		$randColor = imageColorAllocate($bgImage,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		ImageLine ($bgImage, 0, $i, 40, $i, $randColor);
		//$ton =  mt_rand(150,255);
		//$gris = imageColorAllocate($bgImage,$ton,$ton,$ton);
		//ImageLine ($bgImage, 0, $i, 40, $i, $gris);
	}

	for($i=0; $i<40 ; $i= $i+2) {
		//$ton =  mt_rand(150,255);
		//$gris = imageColorAllocate($bgImage,$ton,$ton,$ton);
		ImageLine ($bgImage, $i, 0, $i, 40, $blanc);
	}

	// afficher image bg
	imagepng($bgImage);

	// enregistrer image bg sur disque/serveur
	//imagepng($image, "bg.png");

	//liberer memoire
	imageDestroy($bgImage);

?>
