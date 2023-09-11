<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ4</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php
        // Cabecera: 
        include_once("../estructura/cabecera.php"); 
        // Funcion devolverDatos:
        include_once("../../utils/funciones.php"); 
        // Objeto Control:
        include_once("../../control/ej4/controlEj4.php");
        echo $consigna[4]; 
        $colDatos = devolverDatos();
        $objControl = new ControlEj4 ($colDatos["nombre"], $colDatos["apellido"], $colDatos["edad"], $colDatos["direccion"]);
        $frase = $objControl -> crearSaludo();
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
                <a href="../ej4/indexEj4.php">Volver atras</a>
            </div>
        </div>
    </div>
    <?php include_once("../estructura/pie.php");?>
</body>
</html>