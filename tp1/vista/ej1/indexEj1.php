<?php
    include_once("../../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ1</title>
    <?php include_once($ESTRUCTURA_TP1."/header.php"); ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP1."/cabecera.php"); 
        echo $consigna[1]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP1."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionEj1.php" method="post">
                    <div class="form-group">
                        <p>Ingrese un numero para validar si es positivo, negativo o cero</p>
                        <input id="numero" name="numero" type="number" placeholder="Numero">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP1."/pie.php"); ?>
    <script src="../js/validarEj1.js"></script>
</body>
</html>