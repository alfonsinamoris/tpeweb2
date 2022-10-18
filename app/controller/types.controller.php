<?php
require_once './app/view/inmo.view.php';
require_once './app/model/type.model.php';

class TypesController{
    private $view;
    private $typemodel;

    public function __construct(){
        $this->view = new InmoView();
        $this->typemodel = new TypeModel();
        $this->model = new InmoModel();
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL);
            die();
        }
    } 

    public function Filtrar($id_tipo){
        $properties = $this->model->Filtrar($id_tipo);
        $this->view->Filtrar($properties);
    }

    public function DeleteCategory($id_tipo){
        session_start();
        $this->checkLoggedIn();
        $properties = $this->model->Filtrar($id_tipo);
        if(count($properties)>0){
            $this->view->ShowError();
        }else{
        $this->typemodel->DeleteCategorybyId($id_tipo);
        header("Location: " . BASE_URL . "propiedades");
        }
    }

    public function AddCategory(){
        session_start();
        $this->checkLoggedIn();
        $tipo= $_POST['tipo'];
        $id_tipo= $this->typemodel->InsertCategory($tipo);
        header("Location: " . BASE_URL );
    }

    public function ShowFormEditCat($id_tipo){
        session_start();
        $this->checkLoggedIn();
        $tipo=$this->typemodel->getTypeById($id_tipo);//toma categoria x id
        $this->view->showformeditcat($tipo);
    }

    public function EditCategory(){
        session_start();
        $this->checkLoggedIn();
        $id_tipo=$_POST['id'];
        $tipo=$_POST['tipo'];
        $this->typemodel->EditCategorybyId($tipo,$id_tipo);
        header("Location: " . BASE_URL );
    }
}
