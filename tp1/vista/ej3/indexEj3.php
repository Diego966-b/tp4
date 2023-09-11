<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ3</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php 
        include_once("../estructura/cabecera.php"); 
        echo $consigna[3]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once("../estructura/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionEj3.php" method="post">
                    <div class="form-group">
                        <p>Ingrese sus datos:</p>
                        <p class="d-inline-block">Nombre:</p>
                        <input id="nombre" name="nombre" type="text">
                        <br>
                        <p class="d-inline-block">Apellido:</p>
                        <input id="apellido" name="apellido" type="text">
                        <br>
                        <p class="d-inline-block">Edad:</p>
                        <input id="edad" name="edad" type="number">
                        <br>
                        <p class="d-inline-block">Direccion:</p>
                        <input id="direccion" name="direccion" type="text">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once("../estructura/pie.php"); ?>
    <script src="../js/validarEj3.js"></script>
</body>
</html>