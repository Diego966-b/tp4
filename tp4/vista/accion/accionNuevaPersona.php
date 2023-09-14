<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ6</title>
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
                <div class="form-group">
                    <?php
                        $objAbmPersona = new AbmPersona ();
                        $colDatos = devolverDatos ();
                        $resp = $objAbmPersona -> alta ($colDatos);
                        if ($resp)
                        {
                            echo "<p>Se cargo una persona con éxito</p>";
                        }
                        else
                        {
                            echo "<p>Error</p>";
                        }
                    ?>
                    <a href='../ej6/indexEj6.php' class='btn btn-primary'>Volver</a>;
                </div>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>