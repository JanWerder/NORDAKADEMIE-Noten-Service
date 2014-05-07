<?php
$empfaenger = $_GET['empfaenger'];
$betreff = "Neue Note";
$from = "info@nak.de";
$text = "Im CIS gibt es eine neue Note!";

mail($empfaenger, $betreff, $text, $from);
?>