<?php

$PROYECTO = 'TPS/TPSMejorados'; 
$ROOT = $_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";


// $VISTA = $ROOT.'vista';
// TP1:
$VISTA_TP1 = $PROYECTO.'/tp1/vista';
$CONTROL_TP1 = $ROOT.'/tp1/control';
$MODELO_TP1 = $ROOT.'/tp1/modelo';
$ACCION_TP1 = $ROOT.'/tp1/vista/accion';
$UTILS_TP1 = $PROYECTO. '/tp1/utils';
$ESTRUCTURA_TP1 = $ROOT.'/tp1/vista/estructura';

// TP4:
$VISTA_TP4 = $PROYECTO.'/tp4/vista';
$CONTROL_TP4 = $ROOT.'/tp4/control';
$MODELO_TP4 = $ROOT.'/tp4/modelo';
$ACCION_TP4 = $ROOT.'/tp4/vista/accion';
$UTILS_TP4 = $PROYECTO.'/tp4/utils';
$ESTRUCTURA_TP4 = $ROOT.'/tp4/vista/estructura';

// Archivo funciones: 
include_once($ROOT.'/tp4/utils/funciones.php');

/*
// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/principal.php";


$_SESSION['ROOT']=$ROOT;
*/
?>