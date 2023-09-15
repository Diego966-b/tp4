<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ6</title>
    <?php 
        include_once("../../../config.php");
        include_once($ESTRUCTURA_TP4."/header.php"); 
    ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[6]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <form name="formulario" id="formulario" action="../accion/accionNuevaPersona.php" method="post">
                    <div class="form-group">
                        <!-- Resolucion: -->
                        <h4>Cargar una persona</h4>
                        <p>Ingrese su nombre:</p>
                        <input type="text" id="Nombre" name="Nombre">
                        <p>Ingrese su apellido:</p>
                        <input type="text" id="Apellido" name="Apellido">
                        <p>Ingrese su numero de DNI:</p>
                        <input type="number" id="NroDni" name="NroDni">
                        <p>Ingrese su Fecha de nacimiento:</p>
                        <input type="date" id="fechaNac" name="fechaNac">
                        <p>Ingrese su domicilio:</p>
                        <input type="text" id="Domicilio" name="Domicilio">
                        <p>Ingrese su telefono:</p>
                        <input type="number" id="Telefono" name="Telefono">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj6.js"></script>
</body>
</html>