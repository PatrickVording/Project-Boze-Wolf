<!DOCTYPE= html>
<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	
	<body>
		<form id="contactformulier" method="POST" action="php_contactformulier.php">
			<fieldset>
				<legend>Neem contact op met ons</legend>
				<ul>
					<li><label>Naam
						<input type="text" name="name" required id="contact-name"/>
						</label>
					</li>
					<li><label>Email
						<input type="email" name="email" required id="contact-email"/>
						</label>
					</li>
					<li><label for="contact-phone">
						Telefoonnummer
						<input type="phone" name="contact_phone" required id="contact_phone"/>
						</label>
					</li>
					<li><label for="contact-subject">
						Onderwerp
						</label>
						<select id="contact-subject" name="subject">
							<optgroup label="Ik heb een vraag over het inschrijven voor:">
								<option value="opleiding" selected>opleidingen</option>
								<option value="opendag">opendagen</option>
								<option value="meeloopdag">meeloopdagen</option>
								<option value="nieuwsbrief">nieuwsbrief</option>
							</optgroup>
							<optgroup label="Ik heb een vraag over de opleiding:">
								<option value="chemie">chemie</option>
								<option value="Toegepaste wiskunde">toegepaste wiskunde</option>
							</optgroup>
							<optgroup label="Andere vragen:">
								<option value="uitschrijven nieuwsbrief?">Hoe moet ik me uitschrijven voor de nieuwsbrief?</option>
								<option value="kamers Rotterdam">Waar kan ik een studentenkamer vinden in Rotterdam?</option>
								<option value="locatie">Bevind de opleiding zich alleen in Rotterdam?</option>
								<option value="anders">Ik heb een vraag die niet in de lijst staat</option>
							</optgroup>
						</select>
					</li>
					<li>Opmerkingen
						<textarea name="comments" id="contact-message" rows="4"></textarea>
					</li>
				</ul>
				<input type="submit" name="send" value="Versturen" />
				<input type="reset" value="Reset"/>
			</fieldset>
        </form>
	</body>
</html>