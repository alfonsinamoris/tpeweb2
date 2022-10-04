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

    public function showProperties(){
        $property = $this ->model->getAllProperties();
        $this->view->showProperties($property);
    }

    public function showAdminPage(){
        $this->view->Logadmin();
    }
   
    public function showFilters(){
        $tipo = $this ->model->showWithFilters();
        $this->view->showFilters($tipo); 
    }

    public function showProperty($id){
        $itemSelected = $this->model->showPropertyDetail($id);
        $this->view->showProperty($itemSelected);
    }
}