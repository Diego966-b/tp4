<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ4</title>
    <?php 
        include_once("../../../config.php");
        include_once($ESTRUCTURA_TP4."/header.php"); 
    ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[4]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionBuscarAuto.php" method="post">
                    <div class="form-group">
                        <label for="patente">Patente</label>
                        <input type="text" name="patente" id="patente" placeholder="ABC 123">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj4.js"></script>
</body>
</html>