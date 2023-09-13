<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4."/header.php");
    include_once ($MODELO_TP4."/conector/BaseDatos.php");
    
    include_once($MODELO_TP4."/ej1/Persona.php");
    include_once($CONTROL_TP4."/ej1/AbmPersona.php"); 

    include_once($MODELO_TP4."/ej1/Autos.php");
    include_once($CONTROL_TP4."/ej1/AbmAuto.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ7</title>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[7]; 
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
                        $objAbmAuto = new AbmAuto ();
                        $objAbmPersona = new AbmPersona ();
                        $arrayPersona = [];
                        
                        $colDatos = devolverDatos ();
                        $arrayPersona ["NroDni"] = $colDatos ["DniDuenio"];
                        $listaPersonas = $objAbmPersona -> buscar ($arrayPersona);
                        if (count($listaPersonas) > 0)
                        {
                            $arrayAuto = [];
                            $objPersona = $listaPersonas[0];
                            $patente = $colDatos["Patente"];
                            $marca = $colDatos["Marca"];
                            $modelo = $colDatos["Modelo"];
                            $arrayAuto = ["Patente" => $patente, "Marca" => $marca, "Modelo" => $modelo, "objPersona" => $objPersona];

                            $resp = $objAbmAuto -> alta ($arrayAuto);
                            if ($resp)
                            {
                                echo "<p>Se cargo el auto con exito</p>";
                            }
                            else
                            {
                                echo "<p>Error al cargar el auto</p>";
                            }
                        }
                        else
                        {
                            echo "Esa persona no esta cargada";
                            echo "<br>";
                            echo "<a href='../ej6/indexEj6.php'>Click aqui para cargarla</a>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
</body>
</html>