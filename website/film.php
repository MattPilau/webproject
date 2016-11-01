<!DOCTYPE>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>May the Force be with you</title>
		<link rel="icon" type="image/png" href="favicon.ico" />
		<meta charset="UTF-8">

	</head>


	<body>

		<ul>
			<li id="navbar" class="normal"><a href="projet.php"> Accueil </a></li> 
			<li id="navbar" class="normal"><a href="liste.html" > Magasin </a>
    			<span class="content"> 
    			 <a href="Nouveautes.html">NOUVEAUTES</a>
    			 <a href="populaires.html">POPULAIRES</a>
    			 <a href="collectors.html"> EDITIONS COLLECTORS</a>
     			 <a href="Drame.html">Drame</a>
     			 <a href="Science_Fiction.html">Science-fiction</a>
      		     <a href="Aventure.html">Aventure</a>
      		     <a href="Action.html"> Action</a>
      		     <a href="Comedie.html"> Comédie</a>
      		     <a href="Horreur.html"> Horreur</a>
  			 	 </span>
 			 </li>
			<li id="navbar" class="normal"><a href="informations.html"> Panier </a></li> 
			<li id="navbar" class="anormal"><a href="se_connecter.html"> Se connecter </a></li>
			<li id="navbar" class="anormal"><a href="creer_son_compte.html"> creer un compte </a></li>
		</ul
		<br>
		<br>
		<br>
		<!--<h1><header>MOVIE STORE</header></h1>-->
		<img src="Stormtrooper.jpg" width = 100%>

		<!-- Si connecté, on affiche des idées en fonction des derniers achats
		Sinon, on affiche juste des nouveautés-->

		<?php

		$nom = $_GET['nom'];

		$SQLcmd = 'SELECT * FROM films';
  		$mysqli = new mysqli('localhost','root','','projet_db');
  		$film_id =  $mysqli->query($SQLcmd);
        $mysqli->close();

        $row = $film_id->fetch_assoc();   	
        while($nom != $row['titre']){
        	$row = $film_id->fetch_assoc();
        }
        $realisateur = $row['realisateur'];
        $date = $row['date'];
        $genre1 = $row['genre1'];
        $genre2 = $row['genre2'];
        $duree = $row['duree'];
        $titre_original = $row['titre_original'];
        $acteurs = $row['acteurs'];
        $image = $row['image'];
        $video = $row['video'];
		?>




 	   	<?php echo '<img class="blanket" src="'.$image.'">'; ?>


 	   	<br>
 	   	<br>
 	   	<br>
 	   	<span style="font-size:50;"><?php print($nom); ?> </span>
 	  	<br>
 	   	<br>
 	   	<br>
 	   	<br>
 	   	<br>
 	   	<span style="font-size:32;">
 	   		<b>Realisateur</b> : <?php print($realisateur); ?> <br><br>
 	   		<b>Date de sortie</b> : <?php print($date); ?> <br><br>
 	   		<b>Genre</b> : <?php print($genre1); ?> / <?php print($genre2); ?> <br><br>
 	   		<b>Duree</b> : <?php print($duree); ?> <br><br>
 	   		<b>Titre Original</b> : <?php print($titre_original); ?> <br><br>
 	   		<b>Acteurs </b>: <?php print($acteurs); ?><br><br>

 	   	</span>

		<?php 
		$video2 = "https://www.youtube.com/embed/".$video;
		echo '<iframe width="560" height="315" src="'.$video2.'" frameborder="0" allowfullscreen></iframe> '?>

		<span class="basic_link"><a href="informations.html"> Ajouter au panier </a></span> 
 	   	





<!--
 	   	<br> <br> <br><hr size="1" color=grey>
 	   	<br> <br> <br>	


		<img class="steelbook" src="Alien2.jpg">
		<span class="basic_link"><a href="informations.html" style="margin-left:15%;"> Ajouter au panier </a></span> 
   		<br>
   		<br>
				-->	
	</body>


</html>


























