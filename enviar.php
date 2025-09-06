<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "tu-correo@ejemplo.com"; // <-- cambia por tu correo real
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

    $headers = "From: $email";

    if(mail($destinatario, $asunto, $cuerpo, $headers)){
        echo "✅ Mensaje enviado con éxito.";
    } else {
        echo "❌ Error al enviar el mensaje.";
    }
} else {
    echo "Acceso no permitido.";
}
?>