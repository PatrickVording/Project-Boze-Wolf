<!DOCTYPE= html>
<html>
	<head>
		<title>Aanmeldformulier</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	
	<body>
		<form id="contactformulier" method="POST" action="php_aanmeldformulier.php">
			<legend>Aanmelden voor een studie</legend>
			<ul>
				<li>Voornamen
					<input type="text" name="surname" required id="contact-surname"/>
				</li>
				<li>Tussenvoegsel
					<input type="text" name="middlename" id="contact-middlename"/>
				</li>
				<li>Achternaam
					<input type="text" name="lastname" required id="contact-lastname"/>
				</li>
				<li>Email
					<input type="email" name="email" required id="contact-email"/>
				</li>
				<li>Bevestiging email
					<input type="email" name="email" required id="contact-email"/>
				</li>
				<li>Telefoonnummer
					<input type="number" name="contact_phone" maxlength = "10" required id="contact_phone"/>
				</li>
				<li>Geboortedatum<em class="msg"></em>
					<input type="date" name="Geboortedatum" required id="Geboortedatum"/>
				</li>

				<li>Ik wil me aanmelden voor:
					<select id="opleiding" name="opleiding">
							<option value="Chemie" selected>Chemie</option>
							<option value="Wiskunde">Wiskunde</option>
					</select>
				</li>
			</ul>
			<input type="submit" name="submit" value="Versturen" />
			<input type="reset" value="Reset"/>
        </form>
	</body>
</html>