<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //Función para crear una nueva empresa
    function crearEmpresa($data){
        $this->db->insert('empresa', 
                array(
                    'nomempresa'=>$data['nomempresa'], 
                    'rut'=>$data['rut'],
                    'dircomercial'=>$data['dircomercial'], 
                    'dirst'=>$data['dirst'], 
                    'telefono'=>$data['telefono'], 
                    'fax'=>$data['fax'], 
                    'alias'=>$data['alias'], 
                    'www'=>$data['www']                    
                ));
    }
    
    //Función para recoger la lista completa de las empresas
    function obtenerEmpresas(){
        $query = $this->db->get('empresa');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función para recoger la información de 1 empresa en particular
    function obtenerEmpresa($codempresa){
        $this->db->where('codempresa', $codempresa);  
        $query = $this->db->get('empresa');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función que actualiza los datos de 1 empresa en la db
    function actualizarEmpresa($codempresa,$data){
        $datos = array(
                    'nomempresa'=>$data['nomempresa'], 
                    'rut'=>$data['rut'],
                    'dircomercial'=>$data['dircomercial'], 
                    'dirst'=>$data['dirst'], 
                    'telefono'=>$data['telefono'], 
                    'fax'=>$data['fax'], 
                    'alias'=>$data['alias'], 
                    'www'=>$data['www']       
                );
        $this->db->where('codempresa', $codempresa);
        $query = $this->db->update('empresa',$datos);
    }
    
    //Función que elimina la empresa seleccionada
    function eliminarEmpresa($codempresa){
        $this->db->delete('empresa',array('codEmpresa'=>$codempresa));
    }
    
  /*  function dropdownEmpresas(){
        $query = $this->db->get('empresa');
        if($query->num_rows()>0) return $query;
        else return false;
    }*/
    
    function dropdownEmpresas(){
        $query = $this->db->query('select distinct codempresa, alias from empresa order by alias');
        $empresas = $query->result();
            foreach($empresas as $empresa){
                $dropDownList[$empresa->codempresa] = $empresa->alias;
                }
        $finalDropDown = $dropDownList;
        return $finalDropDown;
        }
}

?>
