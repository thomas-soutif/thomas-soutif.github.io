<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Thomas Soutif </title>
	<link  rel="stylesheet" href="css/style.css" title="black"/>
	<link  rel="stylesheet" href="css/style2.css" title="happy"/>

	<meta charset="utf-8"/>
	<meta name="description" content="Site web de Thomas Soutif"/> 
	<meta name="keywords" content="HTML,CSS,JS"/>
	<link rel="icon" type="image/png" href="css/logo-blanc.png" />
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/bouton.js"></script>
	<script type="text/javascript" src="scripts/script_css.js"></script>
</head>
	
<content>
	<?php
	try{
	$bdd = new PDO('mysql:host=mysql-thomas-soutif.alwaysdata.net;dbname=thomas-soutif_website;charset=utf8', 'thomas-soutif', '1234',                     
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exeption $e){                                                                                                                  
                        die('Erreur : ' . $e->getMessage());                                                                                         
                }                
	$reponse = $bdd->prepare('SELECT * FROM Personne WHERE Id=1')or die(print_r($bdd->errorInfo()));
	$reponse->execute();
?>
</content>
		
<body onload="set_style_from_cookie()">	

	<header>
		<img id="logo" alt="logo" src="css/logo.png" />	
		<ul class="menu" > 
			
			<li><a class="menu_active" href="index.html">Accueil</a></li>
			<li><a href="cours.html">Les cours</a></li>
			<li><a href="projet.html">Le projet IUT</a></li>
			<li><a href="mes_projets.html">Mes Projets Personnels</a></li>
			<li><a href="contact.html">Contact</a></li>
			
		</ul>
	</header>
	

	<section id="corps">
		<h1>Bienvenue sur mon site !</h1>
		<br><br><br><br>
		<center><img id="img2" alt="photo de moi" src="css/P1140618.JPG" /></center>
		<br><br>
		<h2> Qui suis-je ?</h2>
		<p>Je m'apelle <?php echo($reponse['Prenom'].$reponse['Nom'] ) ?>, et j'étudie en deuxième année dans le département informatique sur le site d'Aix-Marseille.</p>

		<h2>Le projet 4DEv</h2>
		<p>Mon groupe et moi allons réaliser cette année un projet sous le nom de code "4DEv". Retrouvez en détail ce projet dans le menu.</p> 
		<br>
		
		
		<h2>Les cours de cette année</h2>
		<p>Retrouvez dans la rubrique "Cours" , les chapitres des amphithéatres que je rédige au format Pdf</p>
		
	</section>

	<footer>
		
		<input class="js" type="button" onclick="switch_style ('black');return false;" name="theme" value="Black Theme">
		<input class="js" type="button" onclick="switch_style ('happy');return false;" name="theme" value="Happy Theme">
		<p class="center">Novembre 2016</p>
		<p>
			<img id="validator"
			src="http://jigsaw.w3.org/css-validator/images/vcss"
			alt="CSS Valide !" />
		</p>
	</footer>
</body>
</html>
