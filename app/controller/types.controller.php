<?php
require_once './app/view/inmo.view.php';
require_once './app/model/type.model.php';

class TypesController{
    private $view;
    private $typemodel;

    public function __construct(){
        $this->view = new InmoView();
        $this->typemodel = new TypeModel();
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL);
            die();
        }
    } 

    public function Filtrar($id_tipo){
       $properties = $this->typemodel->Filtrar($id_tipo);
       $this->view->Filtrar($properties);
    }

    public function DeleteCategory($id_tipo){
        session_start();
        $this->checkLoggedIn();
        $this->typemodel->DeleteCategorybyId($id_tipo);
        header("Location: " . BASE_URL . "propiedades");
    }

    public function AddCategory(){
        session_start();
        $this->checkLoggedIn();
        $tipo= $_POST['tipo'];
        $id_tipo= $this->typemodel->InsertCategory($tipo);
        header("Location: " . BASE_URL );
    }

    public function ShowFormEditCat(){
        $this->view->showformeditcat();
    }

    public function EditCategory($id_tipo){
        $id_tipo=$this->typemodel->EditCategorybyId($id_tipo);
        header("Location: " . BASE_URL );
    }
}
