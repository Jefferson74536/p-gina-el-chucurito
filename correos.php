<?php
$Nombre = $_POST['Nombre'];
$Comida = $_POST['Comida'];
$Telefono = $_POST['Telefono'];
$Descripcion = $_POST['Descripcion'];

$header = 'From: ' . $Telefono . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $Nombre . " \r\n";
$message .= "Telefono de contacto: " . $Telefono . " \r\n";
$message .= "Tipo de Comida: " . $Comida . " \r\n";
$message .= "Mensaje: " . $_POST['Descripcion'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'hernanp1199@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>