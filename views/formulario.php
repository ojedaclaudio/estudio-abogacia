<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

$mensaje = "Este mensaje fue enviado por: $nombre $apellido \n";
$mensaje .= "Su e-mail es: $email \n";
$mensaje .= "Telefono de contacto: $telefono \n";
$mensaje .= "Asunto: \n";
$mensaje .= "$comentarios";


mail("ojeda_asoc@hotmail.com", "Contacto desde pagina Web", $mensaje);


header('Location:formulario-enviado.html')

?>