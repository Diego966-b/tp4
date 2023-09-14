<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ3</title>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[3]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
                <h3>Resolucion:</h3>
                <table class="border">
                    <?php
                        $pos = 0;
                        $objAbmAuto = new AbmAuto ();
                        $listaAutos = $objAbmAuto->buscar(null);
                        $objAbmPersona = new AbmPersona();
                        $listaPersonas = $objAbmPersona->buscar(null);
                        if (count($listaAutos) > 0) {
                            foreach ($listaAutos as $objAuto) 
                            {
                                echo "<div class='row'>";
                                    echo "<div class='col'>";
                                        $objDuenio = $objAuto->getObjDuenio();
                                        $objDuenio = $objDuenio[0];
                                        $nombreDuenio = $objDuenio->getNombre();
                                        $apellidoDuenio = $objDuenio->getApellido();
                                        echo '<tr><td style="width:500px;">Marca: '.$objAuto->getMarca().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Modelo: '.$objAuto->getModelo().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Patente: '.$objAuto->getPatente().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Nombre dueño: '.$nombreDuenio.'</td>';
                                        echo '<tr><td style="width:500px;">Apellido dueño: '.$apellidoDuenio.'</td>';
                                        echo '<tr><td style="width:500px;">----------------------------------------------------</td>';
                                        $pos ++;
                                    echo "</div>";
                                echo "</div>";                         
                            }
                        }
                        else
                        {
                            // PROBAR ESTO !!!
                            echo "<div>";
                            echo "No hay autos cargados";
                            echo "</div>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>