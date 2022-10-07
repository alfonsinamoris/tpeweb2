<?php
require_once './model/inmo.model.php';
require_once './view/admin.view.php';


class adminController {
    private $model;
    private $view;

    public function __construct() {
     $this->model = new InmoModel();
     $this->view = new AdminView();
    }

    public function showAdminPage(){
        $this->view->Logadmin();
    }

    public function validateUser(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

        if($user && password_verify($password, $user->password)){
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location:" . BASE_URL);
        
        }else {
            $this->view->logAdmin("el usuario o la contrasena no existe.");
        }
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);

    }
}