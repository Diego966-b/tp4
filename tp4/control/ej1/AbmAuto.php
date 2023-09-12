<?php
include_once("../../../config.php");
include_once($MODELO_TP4."/ej1/Autos.php");
class AbmAuto{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Autos
     */
    private function cargarObjeto ($param){
        $obj = null;
           
        if (array_key_exists('Patente',$param) and array_key_exists('Marca',$param) and 
            array_key_exists('Modelo',$param) and array_key_exists('DniDuenio',$param))
        {
            $obj = new Autos();
            $obj -> setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
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
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $param['Patente'] = null;
        $elObjtTabla = $this->cargarObjeto($param);
        // verEstructura($elObjtTabla);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
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
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
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
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
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
        // $where = "true "; 1=1
        $where = " true ";
        if ($param<>NULL)
        {
            if  (isset($param['Patente'])) {
                $where.=" and Patente=".$param['Patente'];
            }
            if  (isset($param['Marca'])) {
                $where.=" and Marca ='".$param['Marca']."'";
            }
            if  (isset($param['Modelo'])) {
                $where.=" and Modelo ='".$param['Modelo']."'";
            }
            if  (isset($param['DniDuenio'])) {
                $where.=" and DniDuenio ='".$param['DniDuenio']."'";
            }   
        }
        //$auto = new Autos ();$arreglo = Tabla::listar($where);  
        $arreglo = Autos::listar($where);
        return $arreglo;  
    }
}
?>