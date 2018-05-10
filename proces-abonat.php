<?php
$diners = $_POST['dinero'];
$periode = $_POST['periodo'];
$aportacioDif = $_POST['aportacio-dif'];
$titularCompte = $_POST['titular'];
$codiIban = $_POST['iban'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";



$mensaje = "Este mensaje fue enviado por " . $titularCompte . " \r\n";
$mensaje .= "Dinero: " . $diners . " \r\n";
$mensaje .= "Periodo: " . $periode . " \r\n";
$mensaje .= "Aportacio diferent a la esmentada: " . $_POST['aportacio-dif'] . " \r\n";
$mensaje .= "Titular del compte: " . $_POST['titular'] . " \r\n";
$mensaje .= "Codi bancari IBAN: " . $_POST['iban'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'pontsperlapau@gmail.com ';
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';

echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=http://www.pontsperlapau.com\">";

?>