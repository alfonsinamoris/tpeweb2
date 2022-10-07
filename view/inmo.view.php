<?php
require_once 'libs/Smarty.class.php';

class InmoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty

    }
    function showProperties($properties){
        $this->smarty->assign('properties', $properties);
        $this->smarty->display('templates/propiedades.tpl');
    } 
    //muestra detalle
    function showProperty($property){
        $this->smarty->assign('property',$property); 
        $this->smarty->display('templates/detail.tpl'); 
    }

    function showfilters($tipos){
        $this->smarty->assign('tipos',$tipos);
        $this->smarty->display('templates/propiedades.tpl');
    }
}