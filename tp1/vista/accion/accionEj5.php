<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ5</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php
        // Cabecera: 
        include_once("../estructura/cabecera.php"); 
        // Funcion devolverDatos:
        include_once("../../utils/funciones.php"); 
        // Objeto Control:
        include_once("../../control/ej5/controlEj5.php");
        echo $consigna[5]; 
        $colDatos = devolverDatos();
        $objControl = new ControlEj5 ($colDatos["nombre"], $colDatos["apellido"], $colDatos["edad"], $colDatos["direccion"], $colDatos["sexo"], $colDatos["estudios"]);
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
                <a href="../ej5/indexEj5.php">Volver atras</a>
            </div>
        </div>
    </div>
    <?php include_once("../estructura/pie.php");?>
</body>
</html>