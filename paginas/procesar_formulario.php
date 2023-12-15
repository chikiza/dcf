<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['mensaje'];

    // Destinatario del correo electrónico (tu dirección de correo)
    $destinatario = "chikizalab@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje de formulario de contacto";

    // Contenido del correo electrónico
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Motivo: $motivo\n";
    $contenido .= "Mensaje: $mensaje\n";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redireccionar a una página de confirmación o mostrar un mensaje de éxito
    header("Location: gracias.html");
    exit;
}
?>
