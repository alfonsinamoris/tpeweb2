<?php
require_once 'libs/Smarty.class.php';

class InmoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty

    }

    function showProperties($properties){
        // asigno variables al tpl smarty
        $this->smarty->assign('properties', $properties);

        // mostrar el tpl
        $this->smarty->display('templates/propiedades.tpl');
    } 

    function Logadmin(){
        $this->smarty->display('templates/administrador.tpl');
    }

    function showProperty($property){
        //me aseguro de escribir bien la asignacion y la variable...je
        $this->smarty->assign('property',$property); //habias llamado a la asignacion, 'detalle' y despues la llamabas con
                                                    // propertie, nunca iba a andar
        $this->smarty->display('templates/detail.tpl'); 
    }
}