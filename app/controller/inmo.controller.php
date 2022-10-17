<?php
require_once './app/model/inmo.model.php';
require_once './app/view/inmo.view.php';
require_once './app/model/type.model.php';
//require_once './helpers/admin.helper.php';

class InmoController {
    private $model;
    private $view;
    private $typemodel;

    public function __construct(){
        $this->model = new InmoModel();
        $this->view = new InmoView();
        $this->typemodel = new typeModel();
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
        $tipos = $this->typemodel->showFilters();
        $this->view->showProperties($property,$tipos);
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
        $alquiler_venta = $_POST['alquiler_venta'];

        $id_propiedad=$this->model->insertItem($direccion, $tipo, $habitaciones,$precio,$alquiler_venta);
        header("Location: " . BASE_URL );
    }

    public function ShowFormEdit($id_propiedad){
        $property=$this->model->showPropertyDetail($id_propiedad); //toma propiedad x id
        $tipos = $this->typemodel->showFilters(); //toma todos los tipos
        $this->view->showformedit($property);
    }

    public function EditProperty(){
        session_start();
        $this->checkLoggedIn();
        //if(!empty($_POST['direccion'])&&!empty($_POST['id'])&&!empty($_POST['tipo'])&&!empty($_POST['habitaciones'])&&!empty($_POST['precio'])&&!empty($_POST['alquiler_venta'])){
            $id_propiedad = $_POST['id'];
            $direccion = $_POST['direccion'];
            $tipo = $_POST['tipo'];
            $habitaciones = $_POST['habitaciones'];
            $precio = $_POST['precio'];
            $alquiler_venta = $_POST['alquiler_venta'];

            $this->model->EditProperty($direccion,$tipo, $habitaciones,$precio,$alquiler_venta,$id_propiedad);
            header("Location: " . BASE_URL );
        
    }
}
