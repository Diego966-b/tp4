<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
    include_once ($MODELO_TP4."/conector/BaseDatos.php");
    
    include_once($MODELO_TP4."/ej1/Persona.php");
    include_once($CONTROL_TP4."/ej1/AbmPersona.php"); 

    include_once($MODELO_TP4."/ej1/Autos.php");
    include_once($CONTROL_TP4."/ej1/AbmAuto.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ4</title>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[4]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionEj4.php" method="post">
                <div class="form-group">
                    <?php
                        $_POST['patente'];
                        $objAbmAuto = new AbmAuto();
                        $listaAutos = $objAbmAuto->buscar($_POST['patente']);
                        $encontro = false;

                        if(count($listaAutos)>0) {
                            foreach($listaAutos as $objAuto) {                                                            
                                if($objAuto->getPatente() == $_POST['patente']) {
                                    echo $objAuto->getPatente();
                                    echo $objAuto->getMarca();
                                    echo $objAuto->getModelo();
                                    print_r($objAuto->getObjDuenio());
                                    $encontro = true;   
                                }   
                            }
                        }
                            if(!$encontro){
                                echo "No se encontro ningun auto con esa patente";
                            }
                    ?>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>