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
                                    echo "<div class='row'>";
                                    echo "<div class='col'>";                                   
                                        
                                        echo '<tr><td style="width:500px;">Patente: '.$objAuto->getPatente() .'</td> <br>';
                                        echo '<tr><td style="width:500px;">Modelo: '.$objAuto->getMarca().'</td> <br>';
                                        echo '<tr><td style="width:500px;">Marca: '.$objAuto->getModelo().'</td> <br>';                              
                                 
                                    foreach ($objAuto->getObjDuenio() as $duenio) {
                                        //echo $duenio;
                                        echo '<tr><td style="width:500px;">DNI: '.$duenio->getNroDni() .'</td> <br>';
                                        echo '<tr><td style="width:500px;">Apellido: '.$duenio->getApellido() .'</td> <br>';
                                        echo '<tr><td style="width:500px;">Nombre: '.$duenio->getNombre() .'</td> <br>';
                                        echo '<tr><td style="width:500px;">Fecha Nacimiento: '.$duenio->getFechaNac() .'</td> <br>';
                                        echo '<tr><td style="width:500px;">Telefono: '.$duenio->getTelefono() .'</td> <br>';
                                        echo '<tr><td style="width:500px;">Domicilio: '.$duenio->getDomicilio() .'</td> <br>';
                                    }
                                    $encontro = true;   
                                }  
                                echo "</div>";
                                echo "</div>";     
                            }
                        }
                        if(!$encontro){
                            echo "No se encontro ningun auto con esa patente";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>