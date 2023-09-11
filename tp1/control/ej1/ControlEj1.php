<?php
class ControlEj1 
{
    // Atributos

    private $colDatos;

    public function __construct($colDatos)
    {
        $this -> colDatos = $colDatos;       
    }

    /**
     * Verifica si un numero es positivo, negativo o cero y 
     * hace validaciones del lado de servidor.
     * @return string
     */
    public function verifNumero ()
    {
        $colDatos = $this -> getColDatos ();
        $frase = "";
        if (in_array("null", $colDatos))
        {
            $frase = "No recibi datos";
        }
        else
        {
            if (!is_numeric($colDatos["numero"]))
            {
                $frase = "El dato ingresado no es un numero ";
            }
            else
            {
                $num = $colDatos ["numero"];
                if ($num < 0)
                {
                    $frase = "El numero ".$num." es negativo";
                }
                elseif ($num > 0)
                {
                    $frase = "El numero ".$num." es positivo";
                }
                elseif ($num == 0)
                {
                    $frase = "El numero ".$num." es cero";
                }
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