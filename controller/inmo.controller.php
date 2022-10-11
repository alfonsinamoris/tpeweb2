<?php
require_once './model/inmo.model.php';
require_once './view/inmo.view.php';
require_once './model/type.model.php';

class InmoController {
    private $model;
    private $view;
    private $typemodel;

    public function __construct(){
        $this->model = new InmoModel();
        $this->view = new InmoView();
        $this->typemodel = new TypeModel();
        session_start();

    }

    public function checkLoggedIn() {
        //session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL);
            die();
        }
    } 

    //muestra propiedades en la tabla
    public function showProperties(){
        //session_start();
        $property = $this ->model->getAllProperties();
        $this->view->showProperties($property);
    }

    //no anda
    public function showFilters(){
        //session_start();
        $tipos= $this ->typemodel->showFilters();
        $this->view->showfilters($tipos);
    }

    //muestra la propiedad con su detalle - manda al model y view
    public function showProperty($id_propiedad){
        //session_start();
        $itemSelected = $this->model->showPropertyDetail($id_propiedad);
        $this->view->showProperty($itemSelected);
    }

    //toma id del boton y borra
    public function DeleteItem($id_propiedad){
        $this->checkLoggedIn();
        $this->model->DeleteItemById($id_propiedad);
        header("Location: " . BASE_URL . "propiedades");
    }

    public function AddItem(){
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
        $this->view->ShowFormEdit();
    }


    public function EditItem($id_propiedad){
        $this->checkLoggedIn();
        /*
        $direccion = $_POST['direccion'];
        $tipo = $_POST['tipo'];
        $habitaciones = $_POST['habitaciones'];
        $precio = $_POST['precio'];
        $alquiler_venta = ['alquiler_venta'];
*/
        $buttonselected = $this->model->EditItemById($id_propiedad);
        $this->view->EditItem($buttonselected);

    }
}