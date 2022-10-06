<?php
require_once './model/inmo.model.php';
require_once './view/inmo.view.php';

class adminController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new InmoModel();
        $this->view = new InmoView();
    }

    public function showAdminPage(){
        $this->view->Logadmin();
    }
    // toma valores del form por post y envia al model
    public function AddItem(){
        $direccion = $_POST['direccion'];
        $tipo = $_POST['tipo'];
        $habitaciones = $_POST['habitaciones'];
        $precio = $_POST['precio'];
        $alquiler_venta = ['alquiler_venta'];
        $id= $this->model->insertItem($direccion, $tipo, $habitaciones,$precio,$alquiler_venta);
        header("Location: " . BASE_URL );
    }
    //toma id del boton y borra
    public function DeleteItem($id_propiedad){
        $this->model->DeleteItemById($id_propiedad);
        header("Location: " . BASE_URL. "propiedades");
    }
}