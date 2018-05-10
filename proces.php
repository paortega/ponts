
<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$missatge = $_POST['subject'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['subject'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'pontsperlapau@gmail.com ';
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';

echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=http://www.pontsperlapau.com\">";

?>