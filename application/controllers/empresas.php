<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresas extends CI_Controller {
    //Constructor
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('empresa_model');
    }
    //Función principal
    function index(){
        //Carga el tercer parámetro
        $data['segmento']= $this->uri->segment(3);
        //Carga el encabezado
        $this->load->view('proveedores/headers');
        //Si NO hay un valor en el tercer parámetro, envía la lista completa
        if(!$data['segmento']){
            $data['empresas']=$this->_model->obtenerEmpresas();
        }
        //En caso contrario, presenta la información de esa empresa
        else{
            $data['empresas']=$this->empresa_model->obtenerEmpresa($data['segmento']);
        }
        //Carga los valores que presentará
        $this->load->view('proveedores/empresas', $data);
    }
    
    //Formulario para ingreso de nueva empresa
    function nuevo(){
        $this->load->view('proveedores/headers');
        $this->load->view('proveedores/formulario');  
    }
    
    //Función para ingresar nueva empresa
    function recibirDatos(){
        //pongo los datos en un array
        $data =array(
            'nomempresa'=> $this->input->post('nomempresa'),
            'rut'=> $this->input->post('rut'),
            'dircomercial'=> $this->input->post('dircomercial'),
            'dirst'=> $this->input->post('dirst'),
            'telefono'=> $this->input->post('telefono'),
            'fax'=> $this->input->post('fax'),
            'alias'=> $this->input->post('alias'),
            'www'=> $this->input->post('www')
        );
        //Envío el array al modelo para ingresarlo a la db
        $this->empresa_model->crearEmpresa($data);
    }
    
    //Función para editar los valores de una empresa
    function editar(){
        //Obtiene los valores actuales de la empresa
        $data['codEmpresa'] = $this->uri->segment(3);
        $data['empresa'] = $this->empresa_model->obtenerEmpresa($data['codEmpresa']);
        //Carga el encabezado y el formulario con los datos actuales
        $this->load->view('proveedores/headers');
        $this->load->view('proveedores/editar',$data);
    }
    
    //Función para eliminar los registros
    function borrar(){
        //Obtiene el valor del tercer segmento y lo envía al modelo
        $codEmpresa = $this->uri->segment(3);
        $data['curso'] = $this->empresa_model->eliminarCurso($codEmpresa);
    }
    
    //Función para actualizar un registro
     function actualizar(){
        $data =array(
            'nomempresa'=> $this->input->post('nomempresa'),
            'rut'=> $this->input->post('rut'),
            'dircomercial'=> $this->input->post('dircomercial'),
            'dirst'=> $this->input->post('dirst'),
            'telefono'=> $this->input->post('telefono'),
            'fax'=> $this->input->post('fax'),
            'alias'=> $this->input->post('alias'),
            'www'=> $this->input->post('www')
        );
        $this->empresa_model->actualizarEmpresa($this->uri->segment(3),$data);
        $this->load->view('proveedores/headers');
        $this->load->view('proveedores/bienvenido'); 
    }
}

?>
