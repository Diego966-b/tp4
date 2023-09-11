<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ2</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php
        // Cabecera: 
        include_once("../estructura/cabecera.php"); 
        // Funcion devolverDatos:
        include_once("../../utils/funciones.php"); 
        // Objeto Control:
        include_once("../../control/ej2/controlEj2.php");
        echo $consigna[2]; 
        $colDatos = devolverDatos();
        $objControl = new ControlEj2 ($colDatos);
        $frase = $objControl -> contarHoras();
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once("../estructura/lateral.php"); ?>
            </div>
            <div class="col-9">
                <h3>Resultados</h3>
                <?php
                    echo $frase; // VER!!!
                ?>
                <br>
                <a href="../ej2/indexEj2.php">Volver atras</a>
            </div>
        </div>
    </div>
    <?php include_once("../estructura/pie.php");?>
</body>
</html>