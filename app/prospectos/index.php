<?php
include '../../includes/constants.php';
$prospecto = new prospecto();

$accion = isset($_GET['accion']) ? $_GET['accion'] : '';
switch ($accion) {
    // <editor-fold defaultstate="collapsed" desc="baja">
    case 'baja':
        if (isset($_GET['id'])) {
            $r = $prospecto->darDeBaja($_GET['id']);


            if ($r['suceed']) {
                if ($r['stats']['affected_rows'] > 0) {
                    echo 'Lo hemos dado de baja de nuestra lista de prospectos en '
                    . 'forma satisfactoria.<br>No recibirá más comunicaciones '
                    . 'de nuestra lista.<br>Aun así podrá ser contactado en forma '
                    . 'individual.';
                } else {
                    echo 'No hemos podido darle de baja en nuestra lista.<br>Bien sea '
                    . 'porque su correo electrónico no está registrado en la lista<br>'
                    . 'o porque ya ha sido dado de baja previamente';
                }
            } else {
                echo 'Ocurrió un error durante el proceso y no pudimos darle de '
                . 'baja de nuestra lista.<br>Intente nuevamente darse de baja, si el '
                . 'problema persiste por favor escríbanos a '
                . 'info@administracion-condominio.com.ve y procesaremos su '
                . 'baja en forma manual';
                echo '<br>' . $r['stats']['affected_rows'];
            }
        }
        break; 
    // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="correo leido">
    case 'iwkAAAAAKkwBABiN':
        if (isset($_GET['id'])) {
            $r = $prospecto->correoLeido($_GET['id']);
            if ($r['suceed']) {
                echo $_GET['id'] . ' ha leido el correo';
            } else {
                echo $r['stats']['error'];
            }
        }
        break; 
    // </editor-fold>

    case 'iwkAAAAAKkw':
        if (isset($_GET['id'])) {
            $data = Array();
            $data['email'] = $_GET['id'];
            $data['campaña_id'] = $_GET['envio'];
            $r = $prospecto->trackEmailValoriza2($data);   
            if ($r['suceed']) { 
                echo $_GET['id'] . ' ha leido el correo';
            } else {
                echo $r['stats']['error'];
            }
        }
        break;
    
    default:
        die('Acceso Denegado');
        break;
}

