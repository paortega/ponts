<?php
$opcio = $_POST['opciones'];
$nom = $_POST['nombre'];
$mail = $_POST['email'];
$telefon = $_POST['telefono'];
$direccio = $_POST['direccion'];
$ciutat = $_POST['ciudad'];
$codiP = $_POST['cp'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nom . ",
 de la empresa " . $empresa . " \r\n";
 $mensaje .= "Su opcion es: " . $opcio . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono: " . $telefon . " \r\n";
$mensaje .= "Su direccion: " . $direccio . " \r\n";
$mensaje .= "Su ciudad: " . $ciutat . " \r\n";
$mensaje .= "Su codigo postal: " . $codiP . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'pontsperlapau@gmail.com ';
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';

echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=http://www.pontsperlapau.com\">";

?>