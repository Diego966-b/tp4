<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ8</title>
    <?php 
        include_once("../../../config.php");
        include_once($ESTRUCTURA_TP4."/header.php"); 
    ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[8]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionCambioDuenio.php" method="post">
                    <div class="form-group">
                        <!-- Resolucion: -->
                        <label for="patente">Patente</label>
                        <br>
                        <input type="text" name="patente" id="patente" placeholder="ABC 123">
                        <br>
                        <div class="mt-3">
                        <label for="dni">Número de documento</label>
                        <br>   
                        <input type="number" name="dniDuenio" id="dniDuenio "min="0" max="99999999999" placeholder="11111111">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj8.js"></script>
</body>
</html>