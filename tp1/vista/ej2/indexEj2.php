<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ2</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php 
        include_once("../estructura/cabecera.php"); 
        echo $consigna[2]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once("../estructura/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionEj2.php" method="post">
                    <div class="form-group">       
                        <p>Ingrese la cantidad de horas que cursa PWD por dia: </p>
                        <p>Si no la cursa un dia escriba 0</p>
                        <p class="d-inline-block me-3">Lunes:</p> 
                        <input id="lunes" name="lunes" type="number">
                        <br> 
                        <p class="d-inline-block me-3">Martes:</p> 
                        <input id="martes" name="martes" type="number">
                        <br>
                        <p class="d-inline-block me-3">Miercoles:</p> 
                        <input id="miercoles" name="miercoles" type="number">
                        <br>
                        <p class="d-inline-block me-3">Jueves:</p> 
                        <input id="jueves" name="jueves" type="number">
                        <br>
                        <p class="d-inline-block me-3">Viernes:</p> 
                        <input id="viernes" name="viernes" type="number">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once("../estructura/pie.php"); ?>
    <script src="../js/validarEj2.js"></script>
</body>
</html>