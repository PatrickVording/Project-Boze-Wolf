<!DOCTYPE html>

<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<div class="container">
			<div class="menu">
				<div class="menupic">
						<a href="home.html"><img class="foto" src="images/logo.png" alt="logo" height="100px" width="120px"></a>
				</div>	
					<div class="menu1">
						<ul>
							<a href="aanmeldformulier.html"><img class="imgMenu" border="0" alt="inschrijven" src="Headerknoppen/inschrijven menu.png"/></a>
						</ul>
					</div>	
					<div class="menu1">
						<ul>
							<li><a href="rss.php"><img class="imgMenu" border="0" alt="evenementen" src="Headerknoppen/evenementen menu.png"/>  </a></li>
						</ul>
					</div>	
					<div class="menu1">
						<ul>
							<li><a href="contactformulier.html"><img class="imgMenu" border="0" alt="contact" src="Headerknoppen/contactmenu.png"/>  </a></li>
						</ul>
					</div>	
					<div class="menu1">
						<ul>
							<li><a href="opleidingen.html"><img class="imgMenu" border="0" alt="opleidingen" src="Headerknoppen/opleidingen menu.png"/>  </a></li>
						</ul>
					</div>
			</div>
			<div class="header">
				<img class="foto2" src="images/header.jpg"  alt="headerimage">
			</div>
			<div class="content">
				<?php
					$xml= simplexml_load_file("https://www.utrecht.nl/nieuws/rss.xml");
					echo '<ul class="list-group">';
					foreach ($xml->channel->item as $itm){
						$title=$itm->title;
						$link=$itm->link;
						$description=$itm->description;
						$date=$itm->pubDate;
						echo '<li class="list-group-item"><a href="'.$link.'">'.$title.'</a> 
							   ' .$description. '<br> <hr>'.$date.'</li>';
					} echo '</ul>';
				?>
			<hr>	
			</div>
					<div class="footerLeft">
						<div class="footertext1">
							<p>info@berghuisvanwinden.nl</p>
							<p>+010-5892309</p>
						</div>
					</div>
					<div class="footerMid">
						<div class="footertext2">
							<p><a href="opleidingen.html">Opleidingen</p>
							<p><a href="studiekeuze.html">Hulp nodig met uw studiekeuze?</p>
							<p><a href="rss.php">Informatie over evenementen</p> 
							<p><a href="berghuisvanwindenstuderen.html">Studeren bij het Berghuis van-Winden Lyceum</p>
						</div>
					</div>
			
					<div class="footerRight">

						<div class="socialMedia">
							<img src="images/Instagram-Icon.png" alt="Instagram Icon" height="35px" width="35px">
						</div>
						<div class="socialMedia">
							<img src="images/twitter-squared.png" alt="twitter Icon" height="35px" width="35px">
						</div>
						<div class="socialMedia">
							<img src="images/1000px-F_icon.svg.png" alt="twitter Icon" height="35px" width="35px">
						</div>

						

					</div>
		
		</div>
	</body>
	
</html>
