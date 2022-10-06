<?php
require_once './model/inmo.model.php';
require_once './view/inmo.view.php';

class InmoController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new InmoModel();
        $this->view = new InmoView();
    }
    //muestra propiedades en la tabla
    public function showProperties(){
        $property = $this ->model->getAllProperties();
        $this->view->showProperties($property);
    }
    //no anda
    public function showFilters(){
        $optionSelected = $_POST['type_option'];
        $optionSelected = $this ->model->showWithFilters();
        $this->view->showProperties($property);
    }
    //muestra la propiedad con su detalle - manda al model y view
    public function showProperty($id_propiedad){
        $itemSelected = $this->model->showPropertyDetail($id_propiedad);
        $this->view->showProperty($itemSelected);
    }
}