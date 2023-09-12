<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
    include_once($MODELO_TP4."/conector/BaseDatos.php");
    include_once($MODELO_TP4."/ej1/Persona.php");
    include_once($CONTROL_TP4."/ej1/AbmPersona.php"); 
    include_once($MODELO_TP4."/ej1/Autos.php");
    include_once($CONTROL_TP4."/ej1/AbmAuto.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ5</title>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[5]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
                <h3>Resolucion:</h3>
                <table class="border">
                    <?php
                        $objAbmPersona = new AbmPersona();
                        $listaPersonas = $objAbmPersona->buscar(null);
                        if(count($listaPersonas) > 0){
                            foreach ($listaPersonas as $objPersona) { 
                                echo "<div class='row'>";
                                    echo "<div class='col'>";
                                        echo '<tr><td style="width:500px;">DNI:'.$objPersona->getNroDni().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Nombre: '.$objPersona->getNombre().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Apellido: '.$objPersona->getApellido().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Fecha Nacimiento: '.$objPersona->getFechaNac().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Telefono: '.$objPersona->getTelefono().'</td></tr>';
                                        echo '<tr><td style="width:500px;">Domicilio: '.$objPersona->getDomicilio().'</td></tr>';
                                        echo '<tr><td style="width:500px;">----------------------------------------------------</td></tr>';
                                    echo "</div>";
                                echo "</div>";
                            }
                        }
                    ?>
                </table>
                <form name="formulario" id="formulario" action= "../accion/autosPersona.php" method="post">
                    <div class="form-group">
                        <p>Ingrese un dni para buscar autos:</p>
                        <input id="NroDni" name="NroDni" type="number" placeholder="DNI">
                        <br><br>
                        <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj5.js"></script>
</body>
</html>