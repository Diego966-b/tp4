<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ5</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php 
        include_once("../estructura/cabecera.php"); 
        echo $consigna[5]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once("../estructura/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionEj5.php" method="post">
                    <div class="form-group">
                        <p>Ingrese sus datos:</p>
                        <p class="d-inline-block">Nombre:</p>
                        <input id="nombre" name="nombre" type="text">
                        <br>
                        <p class="d-inline-block">Apellido:</p>
                        <input id="apellido" name="apellido" type="text">
                        <br>
                        <p class="d-inline-block">Edad:</p>
                        <input id="edad" name="edad" type="text">
                        <br>
                        <p class="d-inline-block">Direccion:</p>
                        <input id="direccion" name="direccion" type="text">
                        <br>
                        <p class="d-inline-block">Seleccione su sexo:</p>
                        <br>
                        <input type="radio" id="hombre" name="sexo" value="hombre">
                        <label for="hombre">Hombre</label>
                        <input type="radio" id="mujer" name="sexo" value="mujer">
                        <label for="mujer">Mujer</label>
                        <br><br>
                        <p>Seleccione su nivel de estudios</p> 
                        <input type="radio" id="noTiene" name="estudios" value="ninguno">
                        <label for="noTiene">No tiene estudios</label>
                        <input type="radio" id="primarios" name="estudios" value="estudios primarios">
                        <label for="primarios">Estudios primarios</label>
                        <input type="radio" id="secundarios" name="estudios" value="estudios secundarios">
                        <label for="secundarios">Estudios secundarios</label>
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once("../estructura/pie.php"); ?>
    <script src="../js/validarEj5.js"></script>
</body>
</html>