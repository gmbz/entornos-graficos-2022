<?php
    $from = $_POST['email'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $contenido = $_POST['contenido'];

    $destinatario = "gon.vedia96@gmail.com";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $from . "\r\n";

    if (mail($destinatario, $asunto, $contenido, $headers)){
        echo "Mail enviado";
    } else {
        echo "No enviado";
    }
?>