<?php

/**
 * Clase que mantiene la tabla clientes
 *
 * @autor   Edgar Messia
 * @static  
 * @package     Valoriza2.Framework
 * @subpackage	FileSystem
 * @since 1.0
 */

class prospecto extends db implements crud  {

    const tabla = "prospectos_v2";

    public function actualizar($id, $data) {
        return db::update(self::tabla, $data, Array("id"=>$id));
    }

    public function borrar($id) {
        return db::delete(self::tabla, Array("id"=>$id));
    }

    public function borrarTodo() {
        return db::delete(self::tabla);
    }

    public function insertar($data) {
        return db::insert(self::tabla,$data);
    }

    public function listar() {
        return db::select("*", self::tabla);
    }
  
    public function ver($id) {
        return db::select("*",self::tabla,Array("id"=>$id));
    }
    
    public function darDeBaja($email) {
        return db::update(self::tabla,Array("baja"=>1),Array("email"=>"'".$email."'"));
    }
    
    public function correoLeido($email) {
        return db::update(self::tabla,Array("`contacto-1`"=>1),Array("email"=>"'".$email."'"));
    }
    
    public function trackEmailValoriza2($data) {
        return db::insert('track_email',$data);
    }
    
    public function envioMasivoEmail($asunto,$template, $id = null, $filtro =null) {
        
        $propieatarios = $this->listarPropietariosConEmail($id, $filtro);
        
        if ($propieatarios['suceed'] && count($propieatarios['data'])>0) {
            // cargamos el template
            if (file_exists($template)) {
                $contenido_original = file_get_contents($template);
                
                if ($contenido_original=='') {
                    echo "No se puedo cargar el contenido de ".$template;
                    die();
                }
                // enviamos el email a los destinatarios
                $resultado='';
                $n=1;
                $mail = new mailto(SMTP);
                
                foreach ($propieatarios['data'] as $propietario) {
                    
                    $contenido = $contenido_original;
                    // hacemos la personalizacion del contenido
                    foreach ($propietario as $key => $value) {
                        $contenido = str_replace("[".$key."]", $value, $contenido);
                    }
                    
                    // aquí enviamos el email
                    $destinatario = $propietario['email'];
                    
                    $r = $mail->enviar_email($asunto, $contenido, '', $destinatario, $propietario['nombre']);
                    
                    if ($r=='') {
                        $resultado.= $n.".- Mensaje enviado a ".$destinatario." Ok!\n";
                    } else {
                        $resultado.= $n.".- Mensaje enviado a ".$destinatario." Falló\n";
                    }
                    $n++;                    
                    
                }
                echo nl2br($resultado);
            } else {
                echo $template." no existe";
            }
        }
    }
    
    public function enviarEmailPreRegistro($id) {
        $data = $this->ver($id);
        if ($data['suceed'] == TRUE && count($data['data'])>0) {
            $solicitud = $data['data'][0]['tipo_documento'].'|';
            $solicitud.= $data['data'][0]['numero_documento'].'|'.$id;
            $solicitud = base64_encode($solicitud);
            
            $ini = parse_ini_file('emails.ini');
            
            $mail = new mailto(SMTP);
            $mensaje = sprintf($ini['CUERPO_MENSAJE_REGISTRO_CLIENTE'],
                        $data['data'][0]['nombre'],
                        URL_SISTEMA,
                        $solicitud
                        );
            $asunto = $ini['ASUNTO_MENSAJE_REGISTRO_CLIENTE'];
            //$mensaje.=$ini['PIE_MENSAJE_PAGO'];
            
            $r = $mail->enviar_email($asunto, $mensaje, "", $data['data'][0]['email_principal']);

            if ($r=="") {
                $this->actualizar($id, Array("email_preregistro"=>1));
                $r = "Email enviado a ".$data['data'][0]['email_principal']." Ok!";
            } else {
                $r="No se puedo enviar el correo de confirmación del registro, póngase en contacto"
                        . "con el administrador del sitio";
            }
        } else {
            $r = 'No se encuantra la informaci&oacute;n del cliente';
        }
        return $r;
    }
    
    public function enviarEmailAprobacionRegistro($id) {
        $data = $this->ver($id);
        if ($data['suceed'] == TRUE && count($data['data'])>0) {
            $result = array();
            
            $solicitud = $data['data'][0]['tipo_documento'].'|';
            $solicitud.= $data['data'][0]['numero_documento'].'|'.$id;
            $solicitud = base64_encode($solicitud);
            
            $ini = parse_ini_file('emails.ini');
            
            $mail = new mailto(SMTP);
            $mensaje = sprintf($ini['CUERPO_MENSAJE_APROBACION_REGISTRO_CLIENTE'],
                    $data['data'][0]['nombre'],
                        URL_SISTEMA,
                        $solicitud
                    );
            $asunto = $ini['ASUNTO_MENSAJE_APROBACION_REGISTRO_CLIENTE'];
            
            $r = $mail->enviar_email($asunto, $mensaje, "", $data['data'][0]['email_principal']);

            if ($r=="") {
                $this->actualizar($id, Array("id_estatus"=>1));
                $result['suceed'] = TRUE;
                $result['mensaje'] = 'Aprobación de '.$data['data'][0]['nombre'].' enviada con éxito<br>'.$data['data'][0]['email_principal'].' Ok!';
            } else {
                $result['suceed'] = FALSE;
                if (constant('DEBUG')) {
                    $result['mensaje'] = $r;
                }else {
                    $result['mensaje']= "No se puedo enviar el correo de aprobación del registro"
                        . "con el administrador del sitio";
                }
            }
        } else {
            $result['suceed'] = FALSE;
            $result['mensaje'] = 'No se encuantra la informaci&oacute;n del cliente';
        }
        return $result;
    }
    
    public function enviarEmailRegistroCompletado($id) {
        $data = $this->ver($id);
        if ($data['suceed'] == TRUE && count($data['data'])>0) {
            $result = array();
            $ini = parse_ini_file('emails.ini');
            
            $mail = new mailto(SMTP);
            $mensaje = sprintf($ini['CUERPO_MENSAJE_REGISTRO_CLIENTE_ACTUALIZADO'],
                    $data['data'][0]['nombre'],
                        ROOT
                    );
            $asunto = $ini['ASUNTO_MENSAJE_REGISTRO_CLIENTE_ACTUALIZADO'];
            
            $r = $mail->enviar_email($asunto, $mensaje, "", $data['data'][0]['email_principal']);
        } else {
            $r = 'No se encuantra la informaci&oacute;n del cliente';
        }
        return $r;
    }
    }