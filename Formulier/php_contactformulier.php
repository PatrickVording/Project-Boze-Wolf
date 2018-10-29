<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['contact_form'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];

	$mailTo = "sam@pigeonjohn.nl";
	$headers = "Contactformulier van: ".$mailFrom;
	$txt = $name, $comments;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
?>