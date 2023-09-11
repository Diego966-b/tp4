<?php
class Persona
{
    private $nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio;

    public function __construct()
    {
        $this -> nroDni = "";
        $this -> apellido = "";
        $this -> nombre = "";
        $this -> fechaNac = "";
        $this -> telefono = "";
        $this -> domicilio = "";
    }

    /**
     * Setea los atributos ya cargados en la clase
     */
    public function setear ($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)    
    {
        $this -> setNroDni ($nroDni);
        $this -> setApellido ($apellido);
        $this -> setNombre ($nombre);
        $this -> setFechaNac ($fechaNac);
        $this -> setTelefono ($telefono);
        $this -> setDomicilio ($domicilio);
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql="SELECT * FROM persona WHERE NroDni = ".$this->getNroDni();
        if ($base->Iniciar()) 
        {
            $res = $base->Ejecutar($sql);
            if($res>-1)
            {
                if($res>0)
                {
                    $row = $base->Registro();
                    $nroDni = $row["NroDni"];
                    $apellido = $row["Apellido"];
                    $nombre = $row["Nombre"];
                    $fechaNac = $row["fechaNac"];
                    $telefono = $row["Telefono"];
                    $domicilio = $row["Domicilio"];

                    $this -> setear ($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
                }
            }
        } 
        else 
        {
            $this->setmensajeoperacion("persona->listar: ".$base->getError());
        }
        return $resp;  
    }

    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) 
        VALUES ('".$this->getNroDni()."','".$this -> getApellido()."','".$this -> getNombre()."','".$this -> getFechaNac().
        "','".$this -> getTelefono()."','".$this -> getDomicilio()."');";
        if ($base->Iniciar()) 
        {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("persona->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("persona->insertar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql=
        "UPDATE persona SET Apellido='".$this->getApellido()."',Nombre='".$this->getNombre()."',fechaNac='".$this->getFechaNac().
        "Telefono='".$this->getTelefono()."',Domicilio='".$this->getDomicilio()."',WHERE NroDni=".$this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("persona->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("persona->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM persona WHERE NroDni=".$this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("persona->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("persona->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql= "SELECT * FROM persona ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while ($row = $base->Registro()){
                    $obj = new Persona();

                    $nroDni = $row["NroDni"];
                    $apellido = $row["Apellido"];
                    $nombre = $row["Nombre"];
                    $fechaNac = $row["fechaNac"];
                    $telefono = $row["Telefono"];
                    $domicilio = $row["Domicilio"];
                     
                    $obj -> setear ($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
                    array_push($arreglo, $obj);
                }
            }  
        } else {
            $this->setmensajeoperacion("persona->listar: ".$base->getError());
        }
        return $arreglo;
    }

    // Get

    public function getNroDni ()
    {
        return $this -> nroDni;
    }
    public function getApellido ()
    {
        return $this -> apellido;
    }
    public function getNombre ()
    {
        return $this -> nombre;
    }
    public function getFechaNac ()
    {
        return $this -> fechaNac;
    }
    public function getTelefono ()
    {
        return $this -> telefono;
    }
    public function getDomicilio ()
    {
        return $this -> domicilio;
    }
    
    // Set

    public function setNroDni ($nroDniNuevo)
    {
        $this -> nroDni = $nroDniNuevo;
    }
    public function setApellido ($apellidoNuevo)
    {
        $this -> apellido = $apellidoNuevo;
    }
    public function setNombre ($nombreNuevo)
    {
        $this -> nombre = $nombreNuevo;
    }
    public function setFechaNac ($fechaNacNuevo)
    {
        $this -> fechaNac = $fechaNacNuevo;
    }
    public function setTelefono ($telefonoNuevo)
    {
        $this -> telefono = $telefonoNuevo;
    }
    public function setDomicilio ($domicilioNuevo)
    {
        $this -> domicilio = $domicilioNuevo;
    }

    public function __toString()
    {
        $frase = "Nombre: ".$this -> getNombre ().
        ".<br>Apellido: ".$this -> getApellido ().
        ".<br>Dni: ".$this -> getNroDni ().
        ".<br>Telefono: ".$this -> getTelefono ().
        ".<br>Fecha Nacimiento: ".$this -> getFechaNac ().
        ".<br>Domicilio: ".$this -> getDomicilio ();
        return $frase;
    }
}