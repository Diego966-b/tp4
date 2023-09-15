<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
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
                    $colAutosDuenio = [];
                    $objAbmAuto = new AbmAuto ();
                    $tieneAutos = false;
                    $colDatos = devolverDatos(); 
                    $dniIngresado = $colDatos ["NroDni"]; 
                    $listaAutos = $objAbmAuto->buscar($colDatos);
                        foreach ($listaAutos as $objAuto)
                        {
                            $objDuenio = $objAuto->getObjDuenio();
                            $objDuenio = $objDuenio[0];
                            $dniDuenio = $objDuenio->getNroDni();
                            // echo "Estoy comparando: ".$dniIngresado." con ".$dniDuenio."<br>";
                            if ($dniDuenio == $dniIngresado)
                            {
                                array_push($colAutosDuenio, $objAuto);
                                $tieneAutos = true; 
                            }
                        }
                    $objAbmPersona = new AbmPersona();
                    $listaPersonas = $objAbmPersona->buscar(null);
                    if (!$tieneAutos)
                    {
                        echo "<p>Esta persona no tiene autos registrados a su nombre</p>";
                    }
                    else
                    {
                        echo "<p>Encontre los siguientes autos:</p>";
                        foreach ($colAutosDuenio as $objAutoDuenio)
                        {
                            echo "<table class='border'>";
                                echo '<tr><td style="width:500px;">Marca: '.$objAuto->getMarca().'</td></tr>';
                                echo '<tr><td style="width:500px;">Modelo: '.$objAuto->getModelo().'</td></tr>';
                                echo '<tr><td style="width:500px;">Patente: '.$objAuto->getPatente().'</td></tr>';
                            echo "</table>";
                        }
                    }
                ?>
                <a href="../ej5/indexEj5.php">Volver</a>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>