<?php
class ControlEj4
{
    // Atributos

    private $nombre, $apellido, $edad, $direccion;

    public function __construct($nombre, $apellido, $edad, $direccion)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
        $this -> direccion = $direccion;
    }

    /**
     * Hace un saludo, si una persona es mayor de edad lo dice
     * @return string
     * !!! Es preferible pedir parametros en el modulo y dejar constructor vacio ? o hacer esto ?
     */
    public function crearSaludo ()
    {
        $nombre = $this -> getNombre ();
        $apellido = $this -> getApellido ();
        $edad = $this -> getEdad ();
        $direccion = $this -> getDireccion ();
        $frase = "Hola soy ".$nombre." ".$apellido." tengo ".$edad." años, vivo en ".$direccion;
        if ($edad >= 18)
        {
            $frase = $frase." y soy mayor de edad";
        }
        return $frase;
    }
    // Get

    public function getNombre () {
        return $this -> nombre;
    }
    public function getApellido () {
        return $this -> apellido;
    }
    public function getEdad () {
        return $this -> edad;
    }
    public function getDireccion () {
        return $this -> direccion;
    }

    // Set

    public function setNombre ($nombreNuevo){
        $this -> nombre = $nombreNuevo;
    }
    public function setApellido ($apellidoNuevo) {
        $this -> apellido = $apellidoNuevo;
    }
    public function setEdad ($edadNuevo) {
        $this -> edad = $edadNuevo;
    }
    public function setDireccion ($direccionNuevo) {
        $this -> direccion = $direccionNuevo;
    }
}