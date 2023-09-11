<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ1</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php
        // Cabecera: 
        include_once("../estructura/cabecera.php"); 
        // Funcion devolverDatos:
        include_once("../../utils/funciones.php"); 
        // Objeto Control:
        include_once("../../control/ej1/ControlEj1.php");
        echo $consigna[1]; 
        $colDatos = devolverDatos();
        $objControl = new ControlEj1 ($colDatos);
        $frase = $objControl -> verifNumero ();
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
                <a href="../ej1/indexEj1.php">Volver atras</a>
            </div>
        </div>
    </div>
    <?php include_once("../estructura/pie.php");?>
</body>
</html>