<?php
class ControlEj2 
{
    // Atributos

    private $colDatos;

    public function __construct($colDatos)
    {
        $this -> colDatos = $colDatos;
    }

    /**
     * Cuenta la cantidad de horas que cursa la materia PWD.
     * Usa el $colDatos ya cargado anteriormente
     * 
     * @return string
     */
    public function contarHoras ()
    {
        $colDatos = $this -> getColDatos();
        $frase = "";
        if (in_array("null", $colDatos))
        {
            $frase = "No recibi datos";
        }
        else
        {
            $lunes = $colDatos ["lunes"];
            $martes = $colDatos ["martes"];
            $miercoles = $colDatos ["miercoles"];
            $jueves = $colDatos ["jueves"];
            $viernes = $colDatos ["viernes"];
            if (is_numeric($lunes) && is_numeric($martes) && is_numeric($miercoles) && is_numeric($jueves) && is_numeric($viernes))
            {   
                $horas = $lunes + $martes + $miercoles + $jueves + $viernes;
                $frase = "Usted cursa ".$horas." horas de PWD semanales";
            }
            else
            {
                $frase = "Recibi por lo menos un dato que no es un numero";
            }
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