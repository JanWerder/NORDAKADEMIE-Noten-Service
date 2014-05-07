<?php
if (!empty($_GET['empfaenger']) && !empty($_GET['api_key'])){
	$empfaenger = $_GET['empfaenger'];
	$api_key = $_GET['api_key'];

	$betreff = "Neue Note im CIS!";
	$header  = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= "From: klausuren@nordakademie.de\r\n";
	$text = "Eine neue Note ist verfügbar!<br><a href='https://cis.nordakademie.de'>Zum Campus Information System</a><br><br>Mit freundlichen Grüßen,<br>Dein Notenservice";

	if ($api_key == "key"){
		mail($empfaenger, $betreff, $text, $header);
		echo "Mail verschickt.";
	}else{
		echo "Falscher Empfänger oder API Key.";
	}
}else{
	echo "Nicht alle Parameter versorgt.";
}
?>