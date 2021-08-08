<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(isset($_GET["email"])) {
    //$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
    $destinatario = filter_input(INPUT_GET, "email");
    $headers.= 'From: registro <info@administracion-condominio.com.ve>'."\r\n"."Reply-To: info@administracion-condominio.com.ve\r\nErrors-To: info@administracion-condominio.com.ve\r\n";
    $headers.= "MIME-Version: 1.0\r\n";
    $headers.= "Content-Type: text/html; charset='UTF-8'\r\n";
    //$headers.= "Content-Transfer-Encoding: base64\r\n";
    $headers.= "X-Mailer: PHP/".phpversion()."\n";
    //$headers .= "bcc:ynfantes@gmail.com\n";
    
    
    $subject = "DEMO Sistema Valoriza2";
    //.'Reply-To:'.$destinatario."\r\n
    $contenido = file_get_contents('contacto-1.html');
    $contenido = str_replace("[email]", $destinatario, $contenido);
    //http://drive.google.com/uc?export=view&id=0B4oghZTLDcexTElxMmgtMGVfR1U
    $contenido = base64_encode($contenido);
    $contenido = 'Este es un mensaje de prueba';
    if (mail($destinatario,$subject,$contenido,$headers)) {
        echo '<i class="icon-ok"></i><strong>Menseje enviado con éxito!</strong>
                En breve estaremos contactando con usted.<br>Gracias por su interés.';
    } else {
        echo '<i class="icon-warning-sign"></i><strong>Error al enviar el mensaje.</strong>
                  No se pudo enviar el mensaje. Por favor intente nuevamente.';
    }

    
} else {
    echo '<i class="icon-warning-sign"></i><strong>Ingreso no autorizado.</strong>
            Por favor complete el registro en nuestra página web para recibir el DEMO de Valoriza2';
}