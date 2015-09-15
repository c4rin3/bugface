<!doctype html>
<html lang="fr">
<head>
	<!-- <meta charset="utf-8"/> -->
	<meta charset="ISO-8859-1"/>
	
	<title>Bug Face</title>
	<link href="style.css" rel="stylesheet" type="text/css" />

	<?php 
		// ici on recupere toute les variable utiles a re-remplir le formulaire apres validation
		if (isset($_POST['name'])) $name = $_POST['name'];
		else $name = ""; 
	?>
</head>
<body>

	<div id="container">

	<!-- Header/en-tête - statique -->
		<div id="header">
 		   <h1>bug face</h1>
		</div>
	<!-- fin Header/en-tête - statique -->


	<!-- formulaire -->
		<form id="form" method="post" >
			<label id="label" for="name">Enter your name :</label><br/>
			<!--ici on reutilise $name pour ne pas laisser le champs vide-->
			<input type="text" id="inputName" name="name" size="36" value="<?php echo $name ?>"/><br/>
			<input type="submit" id="submit" value="Go !"/>
		</form>
	<!-- fin formulaire -->


	<!-- affichage de l'entrée du formulaire -->
		<div id="feedbackTxt">
			<?php
				// afficher seulement si 'name' n'est pas vide
				if ($name != "") 
				{
					include ('process.php');  
					print("Ok, your name is : <strong>$name</strong>");
					echo '<br/>'."This is your BUG FACE !";
			?>

		<p style="color:red">
			<?php
				// afficher debug
				//echo "Debug :".'<br/>';
				//echo "1er caract. = ";
				//echo $name[0];
				//echo " ($corps)";
				//echo $mon_hash;
			?>
		<br/>
			<?php
				// afficher debug
				//echo "2nd caract. = ";
				//echo $name[1];
				//echo " ($yeux)";

				} //fin du if plus haut
		 	?>
		</p>
		</div>
	<!-- fin affichage de l'entrée du formulaire -->


	<!-- affichage de l'entrée du formulaire convertie en image -->
		<div id="feedbackImg">
			<?php 
				// img.php ne fait que la partie manip d'image, on lui passe 2 parametre numeriques 
				// si $corps et $yeux ne sont pas definis (process n'a pas de quoi travailler)
				// alors on n'affiche pas 
				if (isset($corps) && isset($yeux) && isset($bouche)) 
					echo "<img src=\"img.php?corps=$corps&yeux=$yeux&bouche=$bouche\"/>";
			?>
		</div>
	<!-- fin affichage de l'entrée du formulaire convertie en image -->

	</div>

<!--Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18846971-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
