<?php
if (isset ($_POST['enviar'])){
    if (!empty($_POST [nombre])) && !empty($_POST [apellido])) && !empty($_POST [telefono])) && !empty($_POST [email])) && !empty($_POST [comentarios])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $comentarios = $_POST['comentarios'];
        $header = 'From' . $email . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion() . "\r\n";\
        $header = "Mime-Version: 1.0 . "\r\n";
        $header = "Content-Type: text/plain";

        $message = "Este mensaje fue enviado por: " . $nombre . $apellido" "\r\n";
        $message = "Su e-mail es: " . $email ." "\r\n";
        $message = "Telefono de contacto: " . $telefono ." "\r\n";
        $message = "Enviado el: " . date('d/m/Y', time());

        $para = 'ojedaclaudio94@gmail.com';
        $asunto = 'Asunto del mensaje'
        $mail($para, $asunto, $email, utf8_decode($menssage), $header);
        if ($email){
            echo "<h4> Formulario Enviado Exitosamente</h4>";
        }

    }
}
