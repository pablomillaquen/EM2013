<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OC extends CI_Controller {
    //Constructor
    function __construct() {
        parent::__construct();
        $this->load->model('oc_model');
        
    }
    //Función principal
    function index(){
        //Carga el tercer parámetro
        $data['segmento']= $this->uri->segment(3);
        //Carga el encabezado
        $this->load->view('include/header');
        //Si NO hay un valor en el tercer parámetro, envía la lista completa
        if(!$data['segmento']){
            $data['ocs']=$this->oc_model->obtenerOCs();
        }
        //En caso contrario, presenta la información de esa oc
        else{
            $data['ocs']=$this->oc_model->obtenerOC($data['segmento']);
        }
        //Carga los valores que presentará
        $this->load->view('ocs/sidebar');
        $this->load->view('ocs/oc', $data);
        $this->load->view('include/footer');
    }
    
    //Formulario para ingreso de nueva oc
    function nuevo(){
        $this->load->view('include/header');
        $this->load->view('ocs/sidebar');
        $this->load->view('ocs/formulario'); 
        $this->load->view('include/footer');
    }
    
    //Función para ingresar nueva oc
    function recibirDatos(){
        //pongo los datos en un array
        $data =array(
            'numoc'=> $this->input->post('numoc'),
            'fecha'=> $this->input->post('fecha'),
            'neto'=> $this->input->post('neto'),
            'impuesto'=> $this->input->post('impuesto'),
            'total'=> $this->input->post('total'),
            'codjustificacion'=> $this->input->post('codjustificacion'),
            'codcentrodecosto'=> $this->input->post('codcentrodecosto'),
            'codcuentacontable'=> $this->input->post('codcuentacontable'),
            'plazoentrega'=> $this->input->post('plazoentrega'),
            'formapago'=> $this->input->post('formapago'),
            'numcotizacion'=> $this->input->post('numcotizacion'),
            'lugarentrega'=> $this->input->post('lugarentrega'),
            'codempresa'=> $this->input->post('codempresa'),
            'nombrepres'=> $this->input->post('nombrepres'),
            'modelo'=> $this->input->post('modelo'),
            'serie'=> $this->input->post('serie'),
            'fechacompra'=> $this->input->post('fechacompra'),
            'contrato'=> $this->input->post('contrato'),
            'codtipomantencion'=> $this->input->post('codtipomantencion'),
            'ultimamantencion'=> $this->input->post('ultimamantencion'),
            'codperiodicidad'=> $this->input->post('codperiodicidad'),
            'descripcionpres'=> $this->input->post('descripcionpres'),
            'comentariopres'=> $this->input->post('comentariopres'),
            'escaneooc'=> $this->input->post('escaneooc'),
            'escaneofactura'=> $this->input->post('escaneofactura'),
            'fechaemision'=> $this->input->post('fechaemision'),
            'fechallegada'=> $this->input->post('fechallegada')
        );
        //Envío el array al modelo para ingresarlo a la db
        $this->oc_model->crearOC($data);
    }
    
    //Función para editar los valores de una oc
    function editar(){
        //Obtiene los valores actuales de la oc
        $data['codoc'] = $this->uri->segment(3);
        $data['oc'] = $this->oc_model->obtenerOC($data['codoc']);
        //Carga el encabezado y el formulario con los datos actuales
        $this->load->view('include/header');
        $this->load->view('ocs/sidebar');
        $this->load->view('ocs/editar',$data);
        $this->load->view('include/footer');
    }
    
    //Función para eliminar los registros
    function borrar(){
        //Obtiene el valor del tercer segmento y lo envía al modelo
        $codoc = $this->uri->segment(3);
        $data['curso'] = $this->oc_model->eliminarCurso($codoc);
    }
    
    //Función para actualizar un registro
     function actualizar(){
        $data =array(
            'numoc'=> $this->input->post('numoc'),
            'fecha'=> $this->input->post('fecha'),
            'neto'=> $this->input->post('neto'),
            'impuesto'=> $this->input->post('impuesto'),
            'total'=> $this->input->post('total'),
            'codjustificacion'=> $this->input->post('codjustificacion'),
            'codcentrodecosto'=> $this->input->post('codcentrodecosto'),
            'codcuentacontable'=> $this->input->post('codcuentacontable'),
            'plazoentrega'=> $this->input->post('plazoentrega'),
            'formapago'=> $this->input->post('formapago'),
            'numcotizacion'=> $this->input->post('numcotizacion'),
            'lugarentrega'=> $this->input->post('lugarentrega'),
            'codempresa'=> $this->input->post('codempresa'),
            'nombrepres'=> $this->input->post('nombrepres'),
            'modelo'=> $this->input->post('modelo'),
            'serie'=> $this->input->post('serie'),
            'fechacompra'=> $this->input->post('fechacompra'),
            'contrato'=> $this->input->post('contrato'),
            'codtipomantencion'=> $this->input->post('codtipomantencion'),
            'ultimamantencion'=> $this->input->post('ultimamantencion'),
            'codperiodicidad'=> $this->input->post('codperiodicidad'),
            'descripcionpres'=> $this->input->post('descripcionpres'),
            'comentariopres'=> $this->input->post('comentariopres'),
            'escaneooc'=> $this->input->post('escaneooc'),
            'escaneofactura'=> $this->input->post('escaneofactura'),
            'fechaemision'=> $this->input->post('fechaemision'),
            'fechallegada'=> $this->input->post('fechallegada')
        );
        $this->oc_model->actualizarOC($this->uri->segment(3),$data);
        redirect(base_url());
    }
    function verFicha(){
        $data['segmento']= $this->uri->segment(3);
        $data['ocs']=$this->oc_model->obtenerOC($data['segmento']);
        //Carga el encabezado y el formulario con los datos actuales
        $this->load->view('include/header');
        $this->load->view('ocs/sidebar');
        $this->load->view('ocs/fichaoc', $data);
        $this->load->view('include/footer');
        
    }
}

?>