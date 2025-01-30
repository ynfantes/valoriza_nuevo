<?php
include './mailto.php';
include '../../includes/constants.php';

// <editor-fold defaultstate="collapsed" desc="llamada telefonica">
if (isset($_POST['llamada'])) {
    $message = "Necesito que llamen para brindarme más información sobre el sistema de administración de condominios<br/>";
    $message .= $_POST["nombre"] . "<br/>";
    $message .= $_POST['telefono'];
    $subject = "Llamar al " . $_POST["telefono"] . " - Valoriza2";
    define("SMTP_SERVER", "mail.administracion-condominio.com.ve");
    define("PORT", 25);
    define("USER_MAIL", "info@administracion-condominio.com.ve");
    define("PASS_MAIL", "Edgar5231/-");
    define("SMTP", 2);
    define("NOMBRE_APLICACION", "Valoriza2");
    $mail = new mailto(SMTP);
    //$email = isset($_POST['token']) ? "info@sistemavaloriza.com" : "ynfantes@gmail.com";
    //if (mail($email,$subject,$message,$headers)) {
    $r = $mail->enviar_email($subject, $message, '', "ynfantes@gmail.com", "Edgar Messia");
    if ($r == '') {
        echo '<i class="icon-ok"></i><strong>Solicitud de llamada enviada con éxito!</strong><br>
                Le estaremos contactando a la brevedad posible.<br>Gracias por su interés.';
    } else {
        echo '<i class="icon-warning-sign"></i><strong>Error al enviar la solicitud.</strong><br>
                  No se pudo enviar el mensaje. Por favor intente nuevamente.';
    }
    die();
}
// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="correo electrónico">
if (isset($_POST["email"])) {
    $prospecto = new prospecto();
    $data = $_POST;
    $data['telefono'] = '';
    $data['baja'] = 0;
    //$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
    $message = "Necesito información sobre el sistema de administración de condominio<br/>";
    $message .= $_POST["email"];
    if (isset($_POST['ciudad'])) {
        $message .= "<br/>Ciudad:" . $_POST['ciudad'];
    } else {
        $data['ciudad'] = '';
    }
    $message = utf8_decode(stripslashes($message));
    if (isset($_POST['token'])) {
        $subject = "Contacto Valoriza2 Internacional";
        $email = "webmail.pronet21@gmail.com";
    } else {
        $subject = "DEMO " . $_POST["email"];
        $email = "webmail.pronet21@gmail.com";
    }
    $r = $prospecto->insertar($data);
    
//    define("SMTP_SERVER","mail.administracion-condominio.com.ve");
//    define("PORT",25);
//    define("USER_MAIL","info@administracion-condominio.com.ve");
//    define("PASS_MAIL","Edgar5231/-");
//    define("SMTP",2);
//    define("NOMBRE_APLICACION","Valoriza2");
    $mail = new mailto(SMTP);
    //$email = isset($_POST['token']) ? "info@sistemavaloriza.com" : "ynfantes@gmail.com";
    //if (mail($email,$subject,$message,$headers)) {
    $r = $mail->enviar_email($subject, $message, '', "webmail.pronet21@gmail.com", "Valoriza2", $_POST['email']);
    if ($r == '') {
        echo '<i class="icon-ok"></i><strong>Menseje enviado con éxito!</strong>
                En breve estaremos contactando con usted.<br>Gracias por su interés.';
    } else {
        echo '<i class="icon-warning-sign"></i><strong>Error al enviar el mensaje.</strong>
                  No se pudo enviar el mensaje. Por favor intente nuevamente.';
    }

    
} else {
    echo '<i class="icon-warning-sign"></i><strong>Error al enviar el mensaje.</strong>
            No se recibió el correo electrónico del solicitante.';
}
// </editor-fold>
