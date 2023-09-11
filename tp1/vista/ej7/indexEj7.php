<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP1 EJ7</title>
    <?php include_once("../estructura/header.php"); ?>
</head>
<body>
    <?php 
        include_once("../estructura/cabecera.php"); 
        echo $consigna[1]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once("../estructura/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionEj1.php" method="post">
                    <div class="form-group">
                        
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once("../estructura/pie.php"); ?>
    <script src="../js/validarEj1.js"></script>
</body>
</html>