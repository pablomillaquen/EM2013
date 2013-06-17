<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //Función para crear una nueva empresa
    function crearEmpresa($data){
        $this->db->insert('empresas', 
                array(
                    'nombreEmpresa'=>$data['nomEmpresa'], 
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
        $query = $this->db->get('empresas');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función para recoger la información de 1 empresa en particular
    function obtenerEmpresa($codempresa){
        $this->db->where('codempresa', $codempresa);  
        $query = $this->db->get('empresas');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función que actualiza los datos de 1 empresa en la db
    function actualizarEmpresa($codempresa,$data){
        $datos = array(
                    'nombreEmpresa'=>$data['nomEmpresa'], 
                    'rut'=>$data['rut'],
                    'dircomercial'=>$data['dircomercial'], 
                    'dirst'=>$data['dirst'], 
                    'telefono'=>$data['telefono'], 
                    'fax'=>$data['fax'], 
                    'alias'=>$data['alias'], 
                    'www'=>$data['www']       
                );
        $this->db->where('codEmpresa', $codempresa);
        $query = $this->db->update('empresas',$datos);
    }
    
    //Función que elimina la empresa seleccionada
    function eliminarEmpresa($id){
        $this->db->delete('empresas',array('idEmpresa'=>$id));
    }
}

?>