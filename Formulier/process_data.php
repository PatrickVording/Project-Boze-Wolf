<?php

//$name=filter_input(INPUT_POST, 'name');
//$email=filter_input(INPUT_POST, 'email');
//$contact_phone=filter_input(INPUT_POST, 'contact_phone');
//
//$subject=filter_input(INPUT_POST, 'subject');
//
//$comments=filter_input(INPUT_POST, 'comments');
//
//
//Als men op de Submit knop heeft gedrukt van het formulier...
if (isset($_POST['send'])) {
    if (!isset($_POST['name'])) {
        $error = "Naam is niet ingevuld<BR />";
    }
	if (!isset($_POST['email'])) {
        $error .= "emailadres is niet ingevuld<BR />";
    }
	if (!isset($_POST['contact_phone'])) {
        $error .= "Telefoonnummer is niet ingevuld";
    }
    
    if (!isset($error)) {

        $bericht  = "Name: ".$_POST['name'];
		$bericht  = "Email:".$_POST['email'];
        $bericht  = "Telefoonnummer:".$_POST['contact_phone'];
		$subject  = "Onderwerp:".$_POST['subject'];
		$comments = "Opmerkingen:".$_POST['comments'];
        mail ("twan.verdel@student.nhlstenden.com", "Verwerken van een formulier", $bericht, "FROM: Contactformulier.html");
        
    } else {
    
        echo "Gelieve alle formuliervelden netjes in te vullen !<BR /><BR />";
        echo "<FONT COLOR="#FF0000">".$error."</FONT>";
        
    }
    
} else {

    echo "U moet eerst het formulier invullen !";

}
?> 