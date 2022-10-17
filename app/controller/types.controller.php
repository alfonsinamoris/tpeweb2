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
        session_start();
        $this->checkLoggedIn();
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

    public function ShowFormEditCat($id_tipo){
        $tipo=$this->typemodel->typeById($id_tipo);
        $tipos=$this->typemodel->showFilters();
        $this->view->showformeditcat($tipo,$tipos);
    }

    public function EditCategory(){
        session_start();
        $this->checkLoggedIn();
        $id_tipo=$_POST['id'];
        $tipo=$_POST['tipo'];
        $this->typemodel->EditCategorybyId($id_tipo,$tipo);
        header("Location: " . BASE_URL );
    }
}
