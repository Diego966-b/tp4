<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
    include_once ($MODELO_TP4."/conector/BaseDatos.php");
    
    include_once($MODELO_TP4."/ej1/Persona.php");
    include_once($CONTROL_TP4."/ej1/AbmPersona.php"); 

    include_once($MODELO_TP4."/ej1/Autos.php");
    include_once($CONTROL_TP4."/ej1/AbmAuto.php"); 
?>

<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ5</title>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[5]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <!-- Resolucion: -->  
                <?php
                    $objAbmAuto = new AbmAuto ();
                    $tieneAutos = false;
                    $colDatos = devolverDatos(); 
                    $dniIngresado = $colDatos ["NroDni"]; 
                    $listaAutos = $objAbmAuto->buscar($colDatos);

                    echo "<table class='border'>";
                        foreach ($listaAutos as $objAuto)
                        {
                            $objDuenio = $objAuto->getObjDuenio();
                            $objDuenio = $objDuenio[0];
                            $dniDuenio = $objDuenio->getNroDni();
                            if ($dniDuenio == $dniIngresado)
                            {
                                mostrarAuto ($objAuto);
                                $tieneAutos = true; // !!!
                            }
                        }
                    echo "</table>";
                    $objAbmPersona = new AbmPersona();
                    $listaPersonas = $objAbmPersona->buscar(null);

                    if (!$tieneAutos)
                    {
                        echo "<p>Esta persona no tiene autos registrados a su nombre</p>";
                    }
                    else
                    {
                        echo "<p>Encontre los siguientes autos:</p>";

                    }
                ?>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>