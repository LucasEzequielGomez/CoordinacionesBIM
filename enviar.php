<?php
// Conecto mi form con el server a traves de los name
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$numero = $_POST['numero'];
$empresa = $_POST['empresa'];
$pais = $_POST['pais'];
​
// Como funciona con el server
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
// Como me a llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Este mensaje fue enviado por " . $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El Telefono es: " . $numero . " \r\n";
$mensaje .= "De la Empresa: " . $empresa . " \r\n";
$mensaje .= "Ubicada en: " . $pais . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
​
$para = 'lucasgomezmmo@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web';
​
mail($para, $asunto, utf8_decode($mensaje), $header);
​
header('Location: index.html');
​
?>