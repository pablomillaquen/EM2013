<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //Función para crear una nueva contacto
    function crearContacto($data){
        $this->db->insert('contacto', 
                array(
                    'nomcontacto'=>$data['nomcontacto'], 
                    'apellcontacto'=> $data['apellcontacto'],
                    'cargo'=>$data['cargo'],
                    'departamento'=>$data['departamento'], 
                    'fonofijo'=>$data['fonofijo'], 
                    'celular'=>$data['celular'], 
                    'email'=>$data['email'], 
                    'codempresa'=>$data['codempresa'], 
                    'fax'=>$data['fax']                    
                ));
    }
    
    //Función para recoger la lista completa de las contactos
    function obtenerContactos(){
        $query = $this->db->get('contacto');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función para recoger la información de 1 contacto en particular
    function obtenerContacto($codcontacto){
        $this->db->where('codcontacto', $codcontacto);  
        $query = $this->db->get('contacto');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función que actualiza los datos de 1 contacto en la db
    function actualizarContacto($codcontacto,$data){
        $datos = array(
                    'nomcontacto'=>$data['nomcontacto'],
                    'apellcontacto'=> $data['apellcontacto'],
                    'cargo'=>$data['cargo'],
                    'departamento'=>$data['departamento'], 
                    'fonofijo'=>$data['fonofijo'], 
                    'celular'=>$data['celular'], 
                    'email'=>$data['email'], 
                    'codcontacto'=>$data['codcontacto'], 
                    'fax'=>$data['fax']       
                );
        $this->db->where('codcontacto', $codcontacto);
        $query = $this->db->update('contacto',$datos);
    }
    
    //Función que elimina la contacto seleccionada
    function eliminarContacto($codcontacto){
        $this->db->delete('contacto',array('codcontacto'=>$codcontacto));
    }
}

?>
