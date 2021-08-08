<?php
date_default_timezone_set("America/La_Paz");

if ($_SERVER['SERVER_NAME'] == "www.administracion-condominio.com.ve" | $_SERVER['SERVER_NAME'] == "administracion-condominio.com.ve") {
    $user           = "pronet21_root";
    $password       = "pronet215231";
    $db             = "pronet21_com_ve";
    $email_error    = true;
    $mostrar_error  = false;
    $debug          = false;
    $sistema        = "/";
    $produccion     = true;
    $protocol       = 'https://';
} else {
    $user           = "root";
    $password       = "";
    $db             = "pronet21_com_ve";
    $debug          = true;
    $sistema        = "/valoriza_nuevo/";
    $email_error    = true;
    $mostrar_error  = true;
    $produccion     = false;
    $protocol       = 'http://';
}

define("HOST",          "localhost");
define("USER",          $user);
define("PASSWORD",      $password);
define("DB",            $db);
define("SISTEMA",       $sistema);
define("EMAIL_ERROR",   $email_error);
define("PRODUCCION",    $produccion);
define("EMAIL_CONTACTO","ynfantes@gmail.com");
define("EMAIL_TITULO",  "error");
define("MOSTRAR_ERROR", $mostrar_error);
define("DEBUG",         $debug);
define("TITULO", "Sistema de Administración de Condominios Valoriza2");
define("ROOT", $protocol.$_SERVER['SERVER_NAME'].SISTEMA);
define("URL_SISTEMA", ROOT . "app");
define("URL_ADMIN", ROOT . "admin");
define("SERVER_ROOT", $_SERVER['DOCUMENT_ROOT'].SISTEMA);
define("TEMPLATE", SERVER_ROOT . "/template/");
define("PROGRAMA_CORREO",SMTP);
define("NOMBRE_APLICACION","Valoriza2");
define("SMTP_SERVER","mail.administracion-condominio.com.ve");                                 
define("PORT",25);
define("USER_MAIL","info@administracion-condominio.com.ve");
define("PASS_MAIL","Edgar5231/-");
define("DEMO",FALSE);