<?php
    include_once("../../../config.php");
    include_once($ESTRUCTURA_TP4 . "/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP4 EJ6</title>
</head>
<body>
    <?php
    include_once($ESTRUCTURA_TP4 . "/cabecera.php");
    echo $consigna[9];
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php include_once($ESTRUCTURA_TP4 . "/lateral.php"); ?>
            </div>
            <div class="col-9">
                <h3>Resolucion:</h3>
                <?php
                    $apellidoStr = "Apellido";
                    $nombreStr = "Nombre";
                    $dniStr = "nroDni";
                    $telefonoStr = "Telefono";
                    $fechaNacimiento = "fechaNac";
                    $domicilioStr = "Domicilio";
                    $objAbmPersona = new AbmPersona();
                    $colDatos = devolverDatos();
                    $dni = $colDatos["nroDni"];
                    $arrayDni = array();
                    $arrayDni['NroDni'] = $dni;
                    $listaPersonas = $objAbmPersona->buscar($arrayDni);
                    if(count($listaPersonas)>0){
                        foreach ($listaPersonas as $ObjPersona) {
                            if ($dni == $ObjPersona->getNroDni()) {
                                $apellido = $ObjPersona->getApellido();
                                $nombre = $ObjPersona->getNombre();
                                $fechaNac = $ObjPersona->getFechaNac();
                                $telefono = $ObjPersona->getTelefono();
                                $domicilio = $ObjPersona->getDomicilio();
                            }
                        }
                        echo '
                           <form id="formulario" name="formulario" action="actualizarDatosPersona.php" method="post">
                            <div class="form-group">
                                <label for="nroDni">Número de Documento</label>
                                <br>
                                <input type="text" id="' . $dniStr . '" name="' . $dniStr . '" disabled value="' . $dni . '">                       
                                <br>
                                <label for="Apellido">Apellido</label>
                               <br>
                                <input type="text" id="' . $apellidoStr . '" name="' . $apellidoStr . '" value="' . $apellido . '">
                              <br>
                                <label for="Nombre">Nombre</label>  
                                <br>                                           
                                <input type="text" id="' . $nombreStr . '" name="' . $nombreStr . '" value="' . $nombre . '">
                                <br>
                                <label for="fechaNac">Fecha de Nacimiento</label>  
                                <br>                                           
                                <input type="date" id="' . $fechaNacimiento . '" name="' . $fechaNacimiento . '" value="' . $fechaNac . '">
                                <br>
                                <label for="telefono">Telefono</label>  
                                <br>                                           
                                <input type="text" id="' . $telefonoStr . '" name="' . $telefonoStr . '" value="' . $telefono . '">
                                <br>
                                <label for="domicilio">Domicilio</label>  
                                <br>                                           
                                <input type="text" id="' . $domicilioStr . '" name="' . $domicilioStr . '" value="' . $domicilio . '">
                                <br>
                                <br>
                                <input class="btn btn-primary" id="btnEnviar" name="btnEnviar" type="submit" value="Enviar" onclick="enviarValor()">
                            </div>
                        </form>';
                    }
                    else
                    {
                        echo "No se encontro persona";
                        echo "<a href='../ej9/indexEj9.php' class='btn btn-primary'>Volver</a>";
                    }
                ?>
            </div>
        </div>
    </div>
    </div>
    <?php include_once($ESTRUCTURA_TP4 . "/pie.php"); ?>
    <script>
function enviarValor() {
  // Clona el campo de entrada
  var inputClonado = document.getElementById("nroDni").cloneNode();
  inputClonado.removeAttribute("disabled");
  
  // Agrega el campo clonado al formulario
  document.getElementById("formulario").appendChild(inputClonado);
  
  // Envía el formulario
  document.getElementById("formulario").submit();
}
</script>
</body>

</html>