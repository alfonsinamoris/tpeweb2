<?php
require_once './app/model/inmo.model.php';
require_once './app/view/admin.view.php';
require_once './app/model/admin.model.php';
//require_once './helpers/admin.helper.php';


class adminController {
    private $adminmodel;
    private $view;

    public function __construct() {
     $this->adminModel = new adminModel();
     $this->view = new AdminView();
     
    }

    public function showAdminPage(){
        $this->view->Logadmin();
    }

    public function validateUser(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->adminModel->getUserByEmail($email);

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