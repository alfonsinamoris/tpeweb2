<?php
require_once 'libs/Smarty.class.php';

class InmoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
        $this->controller = new adminController();
    }
    function showProperties($properties,$tipos){
        $this->smarty->assign('properties', $properties);//tabla propiedades
        $this->smarty->assign('tipos',$tipos); //muestra tabla productos
        $this->smarty->display('templates/propiedades.tpl');
    } 
    //muestra detalle
    function showProperty($property){
        $this->smarty->assign('property',$property); 
        $this->smarty->display('templates/detail.tpl'); 
    }

    function Filtrar($properties){
        $this->smarty->assign('properties',$properties);
        $this->smarty->display('templates/filterstable.tpl');
    }

    function ShowFormEdit($property){
        $this->smarty->assign('property',$property);
        $this->smarty->display('templates/form.edit.tpl');
    }


    function showformeditcat($tipo){
        $this->smarty->assign('tipo',$tipo);
        $this->smarty->display('templates/form.edit.cat.tpl');
    }

}