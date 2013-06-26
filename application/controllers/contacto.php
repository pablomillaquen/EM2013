<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {
    //Constructor
    function __construct() {
        parent::__construct();
        $this->load->model('contacto_model');
        
    }
    //Función principal
    function index(){
        //Carga el tercer parámetro
        $data['segmento']= $this->uri->segment(3);
        //Carga el encabezado
        $this->load->view('include/header');
        //Si NO hay un valor en el tercer parámetro, envía la lista completa
        if(!$data['segmento']){
            $data['contactos']=$this->contacto_model->obtenerContactos();
        }
        //En caso contrario, presenta la información de esa contacto
        else{
            $data['contactos']=$this->contacto_model->obtenerContacto($data['segmento']);
        }
        //Carga los valores que presentará
        $this->load->view('contactos/sidebar');
        $this->load->view('contactos/contacto', $data);
        $this->load->view('include/footer');
    }
    
    //Formulario para ingreso de nueva contacto
    function nuevo(){
        $this->load->view('include/header');
        $this->load->view('contactos/sidebar');
        $this->load->view('contactos/formulario'); 
        $this->load->view('include/footer');
    }
    
    //Función para ingresar nueva contacto
    function recibirDatos(){
        //pongo los datos en un array
        $data =array(
            'nomcontacto'=> $this->input->post('nomcontacto'),
            'cargo'=> $this->input->post('cargo'),
            'depto'=> $this->input->post('depto'),
            'fonofijo'=> $this->input->post('fonofijo'),
            'celular'=> $this->input->post('celular'),
            'email'=> $this->input->post('email'),
            'codempresa'=> $this->input->post('codempresa'),
            'fax'=> $this->input->post('fax')
        );
        //Envío el array al modelo para ingresarlo a la db
        $this->contacto_model->crearContacto($data);
    }
    
    //Función para editar los valores de una contacto
    function editar(){
        //Obtiene los valores actuales de la contacto
        $data['codcontacto'] = $this->uri->segment(3);
        $data['contacto'] = $this->contacto_model->obtenerContacto($data['codcontacto']);
        //Carga el encabezado y el formulario con los datos actuales
        $this->load->view('include/header');
        $this->load->view('contactos/sidebar');
        $this->load->view('contactos/editar',$data);
        $this->load->view('include/footer');
    }
    
    //Función para eliminar los registros
    function borrar(){
        //Obtiene el valor del tercer segmento y lo envía al modelo
        $codcontacto = $this->uri->segment(3);
        $data['curso'] = $this->contacto_model->eliminarContacto($codcontacto);
    }
    
    //Función para actualizar un registro
     function actualizar(){
        $data =array(
            'nomcontacto'=> $this->input->post('nomcontacto'),
            'cargo'=> $this->input->post('cargo'),
            'depto'=> $this->input->post('depto'),
            'fonofijo'=> $this->input->post('fonofijo'),
            'celular'=> $this->input->post('celular'),
            'email'=> $this->input->post('email'),
            'codempresa'=> $this->input->post('codempresa'),
            'fax'=> $this->input->post('fax')
        );
        $this->contacto_model->actualizarContacto($this->uri->segment(3),$data);
        redirect(base_url());
    }
    function verFicha(){
        $data['segmento']= $this->uri->segment(3);
        $data['contactos']=$this->contacto_model->obtenerContacto($data['segmento']);
        //Carga el encabezado y el formulario con los datos actuales
        $this->load->view('include/header');
        $this->load->view('contactos/sidebar');
        $this->load->view('contactos/fichacontacto', $data);
        $this->load->view('include/footer');
        
    }
}

?>
