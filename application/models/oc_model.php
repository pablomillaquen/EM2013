<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oc_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //Función para crear una nueva oc
    function crearOC($data){
        $this->db->insert('oc', 
                array(
                    'numoc'=> $data['numoc'],
                    'fecha'=> $data['fecha'],
                    'neto'=> $data['neto'],
                    'impuesto'=> $data['impuesto'],
                    'total'=> $data['total'],
                    'codjustificacion'=> $data['codjustificacion'],
                    'codcentrodecosto'=> $data['codcentrodecosto'],
                    'codcuentacontable'=> $data['codcuentacontable'],
                    'plazoentrega'=> $data['plazoentrega'],
                    'formapago'=> $data['formapago'],
                    'numcotizacion'=> $data['numcotizacion'],
                    'lugarentrega'=> $data['lugarentrega'],
                    'codempresa'=> $data['codempresa'],
                    'nombrepres'=> $data['nombrepres'],
                    'modelo'=> $data['modelo'],
                    'serie'=> $data['serie'],
                    'fechacompra'=> $data['fechacompra'],
                    'contrato'=> $data['contrato'],
                    'codtipomantencion'=> $data['codtipomantencion'],
                    'ultimamantencion'=> $data['ultimamantencion'],
                    'codperiodicidad'=> $data['codperiodicidad'],
                    'descripcionpres'=> $data['descripcionpres'],
                    'comentariopres'=> $data['comentariopres'],
                    'escaneooc'=> $data['escaneooc'],
                    'escaneofactura'=> $data['escaneofactura'],
                    'fechaemision'=> $data['fechaemision'],
                    'fechallegada'=> $data['fechallegada']
                ));
    }
    
    //Función para recoger la lista completa de las ocs
    function obtenerOCs(){
        $query = $this->db->get('oc');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función para recoger la información de 1 oc en particular
    function obtenerOC($codoc){
        $this->db->where('codoc', $codoc);  
        $query = $this->db->get('oc');
        if($query->num_rows()>0) return $query;
        else return false;
    }
    
    //Función que actualiza los datos de 1 oc en la db
    function actualizarOC($codoc,$data){
        $datos = array(
                    'numoc'=> $data['numoc'],
                    'fecha'=> $data['fecha'],
                    'neto'=> $data['neto'],
                    'impuesto'=> $data['impuesto'],
                    'total'=> $data['total'],
                    'codjustificacion'=> $data['codjustificacion'],
                    'codcentrodecosto'=> $data['codcentrodecosto'],
                    'codcuentacontable'=> $data['codcuentacontable'],
                    'plazoentrega'=> $data['plazoentrega'],
                    'formapago'=> $data['formapago'],
                    'numcotizacion'=> $data['numcotizacion'],
                    'lugarentrega'=> $data['lugarentrega'],
                    'codempresa'=> $data['codempresa'],
                    'nombrepres'=> $data['nombrepres'],
                    'modelo'=> $data['modelo'],
                    'serie'=> $data['serie'],
                    'fechacompra'=> $data['fechacompra'],
                    'contrato'=> $data['contrato'],
                    'codtipomantencion'=> $data['codtipomantencion'],
                    'ultimamantencion'=> $data['ultimamantencion'],
                    'codperiodicidad'=> $data['codperiodicidad'],
                    'descripcionpres'=> $data['descripcionpres'],
                    'comentariopres'=> $data['comentariopres'],
                    'escaneooc'=> $data['escaneooc'],
                    'escaneofactura'=> $data['escaneofactura'],
                    'fechaemision'=> $data['fechaemision'],
                    'fechallegada'=> $data['fechallegada']   
                );
        $this->db->where('codoc', $codoc);
        $query = $this->db->update('oc',$datos);
    }
    
    //Función que elimina la oc seleccionada
    function eliminarOC($codoc){
        $this->db->delete('oc',array('codoc'=>$codoc));
    }
}

?>
