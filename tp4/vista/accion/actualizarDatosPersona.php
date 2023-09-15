<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ9</title>
    <?php 
        include_once("../../../config.php");
        include_once($ESTRUCTURA_TP4."/header.php"); 
    ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[9]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>   
            <?php
                $arrayPersona = [];
                $objAbmPersona = new AbmPersona();
                $colDatos = devolverDatos();  
                $dni = $colDatos["nroDni"];
                $listaPersonas = $objAbmPersona->buscar($dni);
                foreach($listaPersonas as $objPersona){
                    if($objPersona->getNroDni() == $dni){
                        $arrayPersona = ["NroDni"=> $dni, "Apellido" =>$colDatos["Apellido"], "Nombre" => $colDatos["Nombre"], "fechaNac"=>$colDatos["fechaNac"], "Telefono" => $colDatos["Telefono"], "Domicilio" => $colDatos["Domicilio"]];
                    }     
                }     
                $resp = $objAbmPersona -> modificacion ($arrayPersona);
                if ($resp)
                {
                    echo "<p>Se actualizaron los datos con exito</p> <br>";
                    echo "Numero de documento: " . $dni ."<br>";
                    echo "Apellido: " . $colDatos["Apellido"] ."<br>";
                    echo "Nombre: " . $colDatos["Nombre"] . "<br>";
                    echo "Fecha de nacimiento: " . $colDatos["fechaNac"] . "<br>";
                    echo "Telefono: " . $colDatos["Telefono"] . "<br>";
                    echo "Domicilio: " . $colDatos["Domicilio"] . "<br>";
                    echo "<a href='../ej9/indexEj9.php' class='btn btn-primary'>Volver</a>";
                }
                else
                {
                    echo "<p>Error al actualizar la persona</p>";
                    echo "<a href='../ej9/indexEj9.php' class='btn btn-primary'>Volver</a>";
                }
            ?>
                <div class="form-group">
                    <!-- Resolucion: -->
                    <br><br>
                </div>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj9.js"></script>
</body>
</html>