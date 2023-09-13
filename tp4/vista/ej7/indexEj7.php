<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ7</title>
    <?php 
        include_once("../../../config.php");
        include_once($ESTRUCTURA_TP4."/header.php"); 
    ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[7]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionNuevoAuto.php" method="post">
                    <div class="form-group">
                        <!-- Resolucion: -->
                        <h4>Cargar un auto</h4>
                        <p>Ingrese la patente:</p>
                        <input type="text" id="Patente" name="Patente">
                        <p>Ingrese la marca:</p>
                        <input type="text" id="Marca" name="Marca">
                        <p>Ingrese el modelo:</p>
                        <input type="number" id="Modelo" name="Modelo">
                        <p>Ingrese el dni del duenio</p>
                        <input type="number" id="DniDuenio" name="DniDuenio">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj7.js"></script>
</body>
</html>