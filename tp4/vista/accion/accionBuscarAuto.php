<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");

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
                <div class="form-group">
                    <?php
                        $colDatos = devolverDatos();
                        $patente = $colDatos["patente"];
                        $objAbmAuto = new AbmAuto();
                        $listaAutos = $objAbmAuto->buscar($patente);
                        $encontro = false;

                        if(count($listaAutos)>0) {
                            foreach($listaAutos as $objAuto) {                                                            
                                if($objAuto->getPatente() == $patente) {
                                    echo "<table class='border'>";      
                                        echo '<tr><td style="width:500px;">----------------------------------------------------</td></tr>';             
                                        echo '<tr><td style="width:500px;">Patente: '.$objAuto->getPatente() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">Modelo: '.$objAuto->getMarca().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Marca: '.$objAuto->getModelo().'</td></tr>'; 
                                    foreach ($objAuto->getObjDuenio() as $duenio) {
                                        echo '<tr><td style="width:500px;">DNI: '.$duenio->getNroDni() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">Apellido: '.$duenio->getApellido() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">Nombre: '.$duenio->getNombre() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">Fecha Nacimiento: '.$duenio->getFechaNac() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">Telefono: '.$duenio->getTelefono() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">Domicilio: '.$duenio->getDomicilio() .'</td></tr>';
                                        echo '<tr><td style="width:500px;">----------------------------------------------------</td></tr>';
                                    echo "</table>"; 
                                    }
                                    $encontro = true;   
                                }      
                            }
                        }
                        if(!$encontro){
                            echo "<p>No se encontro ningun auto con esa patente</p>";
                        }
                        echo "<a href='../ej4/indexEj4.php' class='btn btn-primary'>Volver</a>";
                    ?>
                </div>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>