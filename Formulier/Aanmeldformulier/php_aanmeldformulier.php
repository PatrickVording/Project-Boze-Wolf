<?php
if (isset($_POST['submit'])) {
	$surname = $_POST['surname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['contact_phone'];
	$geboortedatum = $_POST['Geboortedatum'];
	$subject = "Aanmeldformulier";
	$opleiding = $_POST["opleiding"];
	$mailFrom = $_POST["email"];

	$mailTo = "sam@pigeonjohn.nl";
	$headers = "Aanmeldformulier van: ".$mailFrom;
	$txt = $surname .$middlename .$lastname .$phone .$geboortedatum .$opleiding;

	mail($mailTo, $subject, $headers, $txt);
	header("Location: index.php?mailsend");
}
?>