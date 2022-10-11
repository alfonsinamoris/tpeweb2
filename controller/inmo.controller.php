<?php
require_once './model/inmo.model.php';
require_once './view/inmo.view.php';
require_once './model/type.model.php';
//require_once './helpers/admin.helper.php';

class InmoController {
    private $model;
    private $view;
    private $typemodel;

    public function __construct(){
        $this->model = new InmoModel();
        $this->view = new InmoView();
        $this->typemodel = new TypeModel();
        //$adminhelper = new adminHelper();
        //$adminhelper->checkLoggedIn();
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL);
            die();
        }
    } 
    

    //muestra propiedades en la tabla
    public function showProperties(){
        session_start();
        $property= $this->model->getAllProperties();
        $this->view->showProperties($property);
    }


    public function showFilters(){
        $tipos=$this->typemodel->showFilters($tipos);
        $this->view->showfilters($tipos);
    }

    //muestra la propiedad con su detalle - manda al model y view
    public function showProperty($id_propiedad){
        session_start();
        $itemSelected = $this->model->showPropertyDetail($id_propiedad);
        $this->view->showProperty($itemSelected);
    }

    //toma id del boton y borra
    public function DeleteItem($id_propiedad){
        session_start();
        $this->checkLoggedIn();
        $this->model->DeleteItemById($id_propiedad);
        header("Location: " . BASE_URL . "propiedades");
    }

    public function AddItem(){
        session_start();
        $this->checkLoggedIn();
        $direccion = $_POST['direccion'];
        $tipo = $_POST['tipo'];
        $habitaciones = $_POST['habitaciones'];
        $precio = $_POST['precio'];
        $alquiler_venta = ['alquiler_venta'];

        $id= $this->model->insertItem($direccion, $tipo, $habitaciones,$precio,$alquiler_venta);
        header("Location: " . BASE_URL );
    }
    public function ShowFormEdit(){
        $this->view->showformedit();

    }

    public function EditProperty($id_propiedad){
        $this->checkLoggedIn();
        session_start();
        if((isset($_POST['direccion'])&&isset($_POST['tipo'])&&isset($_POST['habitaciones'])&&isset($_POST['precio'])&&isset($_POST['alquiler_venta']))&&!empty($_POST['direccion'])&&!empty($_POST['tipo'])&&!empty($_POST['habitaciones'])&&!empty($_POST['precio'])&&!empty($_POST['alquiler_venta'])){
        $direccion = $_POST['direccion'];
        $tipo = $_POST['tipo'];
        $habitaciones = $_POST['habitaciones'];
        $precio = $_POST['precio'];
        $alquiler_venta = ['alquiler_venta'];
        $this->model->EditProperty($direccion, $tipo, $habitaciones,$precio,$alquiler_venta);
        $this->view->EditItem($id_propiedad);
    }
}
}