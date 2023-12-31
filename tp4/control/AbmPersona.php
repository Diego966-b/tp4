<?php
class AbmPersona{
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto ($param){
        $obj = null;
           
        if (array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and 
            array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and 
            array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param))
        {
            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if (isset($param['NroDni']) and (isset($param['Apellido'])) and (isset($param['Nombre'])) and (isset($param['fechaNac'])) and 
            (isset($param['Telefono'])) and (isset($param['Domicilio'])))
        {
            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }
    
    /**
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        // $param['NroDni'] = null; No hace falta setearlo en null, no es auto increment
        $elObjPersona = $this->cargarObjeto($param);
        print_r($param);
        if ($elObjPersona!=null and $elObjPersona->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjPersona = $this->cargarObjetoConClave($param);
            if ($elObjPersona!=null and $elObjPersona->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjPersona = $this->cargarObjeto($param);
            if($elObjPersona!=null and $elObjPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     */
    public function buscar($param){
        //$where = " true "; 1=1
        $where = " true ";
        if ($param<>NULL)
        {
            if (isset($param['NroDni'])) {
                $where.=" and NroDni =".$param['NroDni'];
                // echo "TENGO DNI, ES ".$param['NroDni'];
            }   
            if  (isset($param['Apellido'])) {
                $where.=" and Apellido ='".$param['Apellido']."'";
            }
            if  (isset($param['Nombre'])) {
                $where.=" and Nombre ='".$param['Nombre']."'";
            }
            if  (isset($param['fechaNac'])) {
                $where.=" and fechaNac ='".$param['fechaNac']."'";
            }
            if  (isset($param['Telefono'])) {
                $where.=" and Telefono ='".$param['Telefono']."'";
            }
            if  (isset($param['Domicilio'])) {
                $where.=" and Domicilio ='".$param['Domicilio']."'";
            }  
            /* 
            echo "<br>";
            echo "MI WHERE ES ".$where."<br>";
            
            PRINT_R($param);
            ECHO "NO TENGO NADA Y NO SOY NULO";
            */
        }

        // $objPersona = new Persona ();
        $arreglo = Persona::listar($where);   // !!!
        return $arreglo;  
    }
}
?>