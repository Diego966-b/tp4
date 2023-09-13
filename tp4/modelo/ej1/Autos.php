<?php
include_once("../../../config.php");
include_once($MODELO_TP4."/ej1/Persona.php");
include_once($CONTROL_TP4."/ej1/AbmPersona.php");
include_once($CONTROL_TP4."/ej1/AbmAuto.php");
class Autos
{
    private $patente, $marca, $modelo, $objDuenio, $mensajeOperacion;  

    public function __construct()
    {
        $this -> patente = "";
        $this -> marca = "";
        $this -> modelo = "";
        $this -> objDuenio = "";
        $this -> mensajeOperacion = "";
    }

    /**
     * Setea los atributos ya cargados en la clase
     */
    public function setear ($patente, $marca, $modelo, $objDuenio)    
    {
        $this -> setPatente ($patente);
        $this -> setMarca ($marca);
        $this -> setModelo ($modelo);
        $this -> setObjDuenio ($objDuenio);
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM autos WHERE Patente = '".$this->getPatente()."'";
        if ($base->Iniciar()) 
        {
            $res = $base->Ejecutar($sql);
            if($res>-1)
            {
                if($res>0)
                {
                    $row = $base->Registro();
                    $patente = $row['Patente'];
                    $marca = $row['Marca'];
                    $modelo = $row['Modelo'];

                    $abmPersona = new AbmPersona ();
                    $objPersona = $abmPersona -> buscar ($row['DniDuenio']);

                    $this -> setear ($patente, $marca, $modelo, $objPersona);
                }
            }
        } 
        else 
        {
            $this->setmensajeoperacion("autos->listar: ".$base->getError());
        }
        return $resp;  
    }

    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql = "INSERT INTO autos (Patente, Marca, Modelo, DniDuenio) 
        VALUES('".$this->getPatente()."','".$this -> getMarca()."','".$this -> getModelo()."','".$this -> getObjDuenio() -> getNroDni()."');";
        if ($base->Iniciar()) 
        {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("autos->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("autos->insertar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql=
        "UPDATE autos SET Marca='".$this->getMarca()."',Modelo='".$this->getModelo()."',DniDuenio='".$this->getObjDuenio()->getNroDni()." WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("autos->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("autos->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM autos WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("autos->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("autos->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql= "SELECT * FROM autos ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while ($row = $base->Registro()){
                    $abmPersona = new AbmPersona ();
                    $obj = new Autos();
                    $array = [];
                    $patente = $row['Patente'];
                    $marca = $row['Marca'];
                    $modelo = $row['Modelo'];

                    $array['NroDni'] = $row['DniDuenio'];
                    $objPersona = $abmPersona -> buscar ($array);

                    $obj -> setear ($patente, $marca, $modelo, $objPersona);
                    array_push($arreglo, $obj);
                }
            }  
        } else {
            $this->setmensajeoperacion("autos->listar: ".$base->getError());
        }
        return $arreglo;
    }

    // Get

    public function getPatente () {
        return $this -> patente;
    }
    public function getMarca () {
        return $this -> marca;
    }
    public function getModelo () {
        return $this -> modelo;
    }
    public function getObjDuenio () {
        return $this -> objDuenio;
    }
    public function getMensajeOperacion () {
        return $this -> mensajeOperacion;
    }

    // Set

    public function setPatente ($patenteNueva) {
        $this -> patente = $patenteNueva;
    }
    public function setMarca ($marcaNueva) {
        $this -> marca = $marcaNueva;
    }
    public function setModelo ($modeloNuevo) {
        $this -> modelo = $modeloNuevo;
    }
    public function setObjDuenio ($objDuenioNuevo) {
        $this -> objDuenio = $objDuenioNuevo;
    }
    public function setMensajeOperacion ($mensajeOperacionNuevo) {
        $this -> mensajeOperacion = $mensajeOperacionNuevo;
    }

    // __toString

    public function __toString()
    {
        $frase = 
        "La marca del auto es: ".$this -> getMarca().
        ".<br>El modelo es: ".$this -> getModelo().
        ".<br>La patente es: ".$this -> getPatente().
        ".<br>El dueño es: ".$this -> getObjDuenio();
        return $frase;
    }
}
