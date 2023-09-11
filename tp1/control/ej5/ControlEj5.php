<?php
class ControlEj5
{
    // Atributos

    private $nombre, $apellido, $edad, $direccion, $sexo, $estudios;

    public function __construct($nombre, $apellido, $edad, $direccion, $sexo, $estudios)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
        $this -> direccion = $direccion;
        $this -> sexo = $sexo;
        $this -> estudios = $estudios;
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
        $sexo = $this -> getSexo ();
        $estudios = $this -> getEstudios ();
        $frase = "Hola soy: ".$nombre." ".$apellido.".<br>Mi edad es: ".$edad." años<br>Mi direccion es: ".$direccion
        .".<br>Mi sexo es: ".$sexo.".<br>Mi nivel de estudios es: ".$estudios;
        if ($edad >= 18)
        {
            $frase = $frase."<br>Soy mayor de edad";
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
    public function getSexo () {
        return $this -> sexo;
    }
    public function getEstudios () {
        return $this -> estudios;
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
    public function setSexo ($sexoNuevo) {
        $this -> sexo = $sexoNuevo;
    }
    public function setEstudios ($estudiosNuevo) {
        $this -> estudios = $estudiosNuevo;
    }
}