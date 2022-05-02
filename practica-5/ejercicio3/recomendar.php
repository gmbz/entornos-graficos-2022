<?php
    $nombre_destinatario = $_POST['nombreDestinatario'];
    $email_destinatario = $_POST['emailDestinatario'];
    $nombre_remitente = $_POST['nombreRemitente'];
    $email_remitente = $_POST['emailRemitente'];
    $site = "www.google.com";
    $nombre_site = "Google";
    $asunto = $nombre_remitente . " te recomienda un sitio";

    $contenido = "<h1>Hola " . $nombre_destinatario . "</h1>";
    $contenido .= $nombre_remitente . " te recomienda que visites <strong>" . $nombre_site . "</strong><br>";
    $contenido .= "Puedes verlo <a href=\"" . $site .  "\">aqui</a><br>";
    $contenido .= "Saludos!";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $email_remitente . "\r\n";

    if (mail($email_destinatario, $asunto, $contenido, $headers)) {
        echo "Mail enviado";
    } else {
        echo "No enviado";
    }
?>