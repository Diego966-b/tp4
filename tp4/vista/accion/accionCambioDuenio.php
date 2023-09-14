<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TP4 EJ8</title>
</head>

<body>
    <?php
        include_once($ESTRUCTURA_TP4."/cabecera.php");
        echo $consigna[8];
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
                //ADC 152  28326986
                    $arrayAuto = [];
                    $objAbmAuto = new AbmAuto();
                    $colDatos = devolverDatos();
                    $dniIngresado = $colDatos["dniDuenio"];
                    $patenteIngresada = $colDatos["patente"];

                    $listaAutos = $objAbmAuto->buscar($colDatos);
                    $objAbmPersona = new AbmPersona();
                    $listaPersonas = $objAbmPersona->buscar(null);
                    $tieneAutos = false;
                    $patenteNoEncontrada = false;
                    foreach ($listaAutos as $objAuto) {
                        $objDuenio = $objAuto->getObjDuenio();
                        $objDuenio = $objDuenio[0];
                        $dniDuenio = $objDuenio->getNroDni();
                        if ($objAuto->getPatente() == $patenteIngresada) {                                        
                            if ($dniDuenio == $dniIngresado) {                                               
                                $tieneAutos = true;
                            }else{
                                foreach($listaPersonas as $objPersona){
                                    if($objPersona->getNroDni() == $dniIngresado){
                                        $arrayAuto = ["Patente" => $patenteIngresada, "Marca" => $objAuto->getMarca(), "Modelo"=>$objAuto->getModelo(), "objPersona" => $objPersona];
                                    }                               
                                }                      
                            }
                        }else {                        
                            $patenteNoEncontrada = true;
                        }                   
                    }
                    $resp = $objAbmAuto -> modificacion($arrayAuto);
                    if ($resp)
                    {
                        echo "--------------------------------- <br>";
                        echo "<p>Se cargo el auto con exito</p>";
                        echo "--------------------------------- <br>";
                        foreach($arrayAuto as $clave => $valor){
                            echo $clave .": " . $valor . "<br>";
                        }
                        echo "--------------------------------- <br>";
                    }
                    else
                    {
                        echo "--------------------------------- <br>";
                        echo "<p>Error al cargar el auto</p>";
                    }
                    if ($tieneAutos) {
                        echo "La persona ingresada ya es dueña del auto.";
                    }
                    if(!$patenteNoEncontrada){
                        echo "La patente ingresada, no esta en nuestros registros.";
                    }
                    echo "--------------------------------- <br>";
                ?>
                <a href="../ej8/indexEj8.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
    <?php include_once($ESTRUCTURA_TP4 . "/pie.php"); ?>
</body>
</html>