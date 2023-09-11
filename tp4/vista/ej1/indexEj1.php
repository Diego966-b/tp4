<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ1</title>
    <?php 
        include_once("../../../config.php");
        include_once($ESTRUCTURA_TP4."/header.php");

        include_once("../../modelo/ej1/Persona.php");
        include_once("../../control/ej1/AbmPersona.php"); 
        

        include_once("../../modelo/ej1/Autos.php");
        include_once("../../control/ej1/AbmAuto.php"); 

        include_once ("../../modelo/conector/BaseDatos.php");
    ?>
</head>
<body>
    <?php 
        include_once($ESTRUCTURA_TP4."/cabecera.php"); 
        echo $consigna[1]; 
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4."/lateral.php"); ?>
            </div>
            <div class="col-9">
            <h3>Resolucion:</h3>
                <a href="#">nuevo</a>
                <table border="1">
                    <?php
                    $pos = 0;
                    
                    $objAbmAuto = new AbmAuto ();
                    $listaAutos = $objAbmAuto->buscar(null);

                    $objAbmPersona = new AbmPersona();
                    $listaPersonas = $objAbmPersona->buscar(null);

                    if (count($listaAutos) > 0) {
                        foreach ($listaAutos as $objAuto) 
                        {
                            echo "<div class='row'>";
                                echo "<div class='col'>";

                                    $objDuenio = $objAuto->getObjDuenio();
                                    $objDuenio = $objDuenio[0];
                                    $dniDuenio = $objDuenio->getNroDni();
                                    
                                    echo '<tr><td style="width:500px;">Marca: '.$objAuto->getMarca().'</td>';
                                    echo '<tr><td style="width:500px;">Modelo: '.$objAuto->getModelo().'</td>';
                                    echo '<tr><td style="width:500px;">Patente: '.$objAuto->getPatente().'</td>';
                                    echo '<tr><td style="width:500px;">Dni Dueño: '.$dniDuenio.'</td>';
                                    echo '<td><a href="ftabla_editar.php?id='.'">editar</a></td>';
                                    echo '<td><a href="accion/abmTabla.php?accion=borrar&id='.'">borrar</a></td></tr>'; 
                                    $pos ++;
                                    echo '<tr><td>----------------------------------------------------</td>';
                                echo "</div>";
                            echo "</div>";                         
                        }
                    }
                    /*
                    $objAbmPersona = new AbmPersona();
                    $listaPersonas = $objAbmPersona->buscar(null);
                    if(count($listaPersonas) > 0){
                        foreach ($listaPersonas as $objPersona) 
                        { 
                            echo "<div class='row'>";
                                echo "<div class='col'>";
                                    echo '<tr><td style="width:500px;">DNI:'.$objPersona->getNroDni().'</td>';
                                    echo '<tr><td style="width:500px;">Nombre: '.$objPersona->getNombre().'</td>';
                                    echo '<tr><td style="width:500px;">Apellido: '.$objPersona->getApellido().'</td>';
                                    echo '<tr><td style="width:500px;">Fecha Nacimiento: '.$objPersona->getFechaNac().'</td>';
                                    echo '<tr><td style="width:500px;">Telefono: '.$objPersona->getTelefono().'</td>';
                                    echo '<tr><td style="width:500px;">Domicilio: '.$objPersona->getDomicilio().'</td>';

                                    echo '<td><a href="ftabla_editar.php?id='.$objPersona->getNroDni().'">editar</a></td>';
                                    echo '<td><a href="accion/abmTabla.php?accion=borrar&id='.$objPersona->getNroDni().'">borrar</a></td></tr>'; 
                                    echo '<tr><td>----------------------------------------------------</td>';
                                echo "</div>";
                            echo "</div>";
                        }
                        
                    }
                    */
                    ?>
                </table>
                </body>
                </html>
            </div>
        </div>
    </div> 
    <?php include_once($ESTRUCTURA_TP4."/pie.php"); ?>
    <script src="../js/validarEj1.js"></script>
</body>
</html>