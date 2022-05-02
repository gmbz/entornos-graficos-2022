<?php
    $destinatario = "gon.vedia96@gmail.com";
    $asunto = "prueba";
    $cuerpo = ' 
        <html> 
            <head> 
                <title>Prueba de correo</title> 
            </head> 
            <body> 
                <h1>XD</h1> 
                <p>
                    HOLA CRACK
                </p> 
            </body> 
        </html> 
        '; 

    //para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Gonzalo <gon.vedia96@gmail.com>\r\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    echo "enviado ";
?>