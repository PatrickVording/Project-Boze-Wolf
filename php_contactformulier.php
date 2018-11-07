<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['contact_phone'];
	$onderwerp = $_POST['onderwerp'];
	$comments = $_POST['comments'];
	$subject = "Contactformulier";

	$mailTo = "sam@pigeonjohn.nl";
	$headers = "Contactformulier van: ".$mailFrom;
	$txt = $name .$phone .$onderwerp .$comments;

	mail($mailTo, $subject, $headers, $txt);
	header("Location: contactformulier.html?mailsend");
}
?>