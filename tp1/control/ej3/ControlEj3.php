<?php
class ControlEj3 
{
    // Atributos

    private $colDatos;

    public function __construct($colDatos)
    {
        $this -> colDatos = $colDatos;
    }

    /**
     * Crea un saludo
     * 
     * @return string
     */
    public function crearSaludo ()
    {
        $colDatos = $this -> getColDatos();
        $frase = "";
        if (in_array("null", $colDatos))
        {
            $frase = "No recibi datos";
        }
        else
        {
            $nombre = $colDatos["nombre"];
            $apellido = $colDatos["apellido"];
            $edad = $colDatos["edad"];
            $direccion = $colDatos["direccion"];
            $frase = "Hola me llamo ".$nombre." ".$apellido.". Tengo ".$edad." años y vivo en ".$direccion;
        }
        return $frase;
    }
    // Get

    public function getColDatos () {
        return $this -> colDatos;
    }

    // Set

    public function setColDatos ($colDatosNuevo) {
        $this -> colDatos = $colDatosNuevo;
    }
}
?>