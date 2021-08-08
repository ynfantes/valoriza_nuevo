<?php
include './assets/includes/mailto.php';
define("SMTP_SERVER","mail.administracion-condominio.com.ve");
define("PORT",25);
define("USER_MAIL","info@administracion-condominio.com.ve");
define("PASS_MAIL","Edgar5231/-");
define("SMTP",2);
$mail = new mailto(SMTP);
$r = $mail->enviar_email("Prueba", "Este es un mensaje de prueba", '', "ynfantes@gmail.com", "Edgar Messia");
                    
if ($r=='') {
    $resultado.= $n.".- Mensaje enviado a Ok!\n";
} else {
    $resultado.= $n.".- Mensaje enviado a Falló\n";
}
