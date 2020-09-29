<DOCTYPE!html>
<html><!--Etusivu-->
<head>
<meta charset="utf-8">
<!--scaalaa sivut laitteen koon mukaan-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="drptest.css">
<link rel="stylesheet" type="text/css" href="datatyyli.css">
<link rel="stylesheet" type="text/css" href="formtyyli.css">

<title>Dataneito Yhteydenotto</title>
</head>

<body>
	<nav role="navigation">
		<ul>
			<li><a href="#">Etusivu</a></li>
			<li><a href="#">Blogi</a>
				<ul class="dropdown">
					<li><a href="#">Syksy 2018</a></li>
					<li><a href="#">Kevät 2019</a></li>
				</ul>
			</li>
			<li><a href="#">Tehtävä</a></li>
			<li><a href="#">Yhteystiedot</a></li>
		</ul>
	</nav>
	
	<div class="banneri"><img src="dnkuvat/dataneitobanneri.jpg" alt="Dataneito" width="100%"></div>
	<div class="sisältö">
		
			<h1 class="otsikkoyo">Yhteydennotto</h1>
			<h4 class="yhteydenotto">Haluatko kysyä meiltä jotain?<br>
				Tai jos on jokin aihe mielessä, mistä mielelläsi<br>
				kuulisit niin mainitse ihmeessä, näin pääset<br>
				mahdollisesti vaikuttamaan seuraavaan postaukseen!</h4>
	
			<div class="lomake">
				<form action="neitoyhtotto.php" method="post">
				
					<label for="fname">Nimi tai nimimerkki</label>
					<input type="text" name="fname" placeholder="Nimi(merkki)">
					
					<label for="message">Viesti</label>
					<textarea name="message" placeholder="Viesti" style="height:200px"></textarea>
				
					<input type="submit" name="lähetä">
				</form>
			</div>
	</div>
	
	<?php
		if ($_POST["lähetä"]<>"") {
			$to = "riina.backman@gmail.com";
			$subject = "Ontullutpostia";
			$message = "Lomakkeen sisältö \n"
						."Nimi: ".$_POST["fname"]
						."Viesti: ".$_POST["message"];
						
			mail($to,$subject,$message) or die ("ei onnistu");
			echo "Kiitos viesti on saapunut";
		}		
	?>
	
		<div class="alakuva"><img src="dnkuvat/dataa2.png" alt="pinkkiä dataa"></div>
</body>
</html>