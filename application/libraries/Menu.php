<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu {
    private $arr_menu;
    
    //Constructor
    public function __construct($arr) {
        $this->arr_menu = $arr;
        }
    
    //Función que crea el menú    
    public function construirMenu(){
        $ret_menu ="<ul class='nav nav-list'>";
        $ret_menu.="<li class='nav-header'>Menú lateral</li>";
        foreach ($this->arr_menu as $opcion) {
            $ret_menu .= "<li><a href='".$opcion."'>".$opcion."</a></li>";
        }
        $ret_menu .="</ul>";
        return $ret_menu;
        }
    }

?>
