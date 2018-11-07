<!DOCTYPE= html>
<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	</head>
	
	<body>
		<form id="contactformulier" method="POST" action="php_aanmeldformulier.php">
			<legend>Aanmelden voor een studie</legend>
			<label for="contact-surname">
				Voornamen
			</label>
					<input type="text" name="surname" required id="contact-surname"/>
			<label for="contact-middlename">
				Tussenvoegsel
					<input type="text" name="middlename" id="contact-middlename"/>
			</label>
			<label for="conact-lastname">
				Achternaam
			</label>
					<input type="text" name="lastname" required id="contact-lastname"/>
			<label for="contact-email">
				Email
			</label>
					<input type="email" name="email" required id="contact-email"/>
			<label for="contact-email">
				Bevestiging email
			</label>
					<input type="email" name="email" required id="contact-email"/>
			<label for="contact_phone">
				Telefoonnummer
			</label>
					<input type="number" name="contact_phone" maxlength = "10" required id="contact_phone"/>
			<label for="Geboortedatum">
				Geboortedatum
			</label>
					<input type="date" name="Geboortedatum" required id="Geboortedatum"/>
			<label for="opleding">
			Ik wil me aanmelden voor:
			</label>
				<select id="opleiding" name="opleiding">
						<option value="Chemie" selected>Chemie</option>
						<option value="Wiskunde">Wiskunde</option>
				</select>
			<input type="submit" name="submit" value="Versturen" />
			<input type="reset" value="Reset"/>
        </form>
	</body>
</html>