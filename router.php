<?php
require_once './controller/inmo.controller.php';
require_once './controller/admin.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$action = 'propiedades';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'propiedades':
        $inmoController = new InmoController();
        $inmoController->showProperties();
        break;

    case 'detalle': //muestro el detalle de cada item- mando funcion al controller USER
        $inmoController = new InmoController();
        $inmoController->showProperty($params[1]);

    case 'login'://muestro el form para acceder a ADMIN
        $adminController = new adminController();
        $adminController->showAdminPage();
        break;

    case 'validate':
        $AdminController = new AdminController();
        $AdminController->validateUser();
        break;
    case 'logout':
        $AdminController = new AdminController();
        $AdminController->Logout();

    case 'agregar'://agrego item con form - mando funcion al controller ADMIN
        $inmoController = new InmoController();
        $inmoController->AddItem();
        break;

    case 'borrar'://borro item con boton - mando al controller ADMIN
        $inmoController = new InmoController();
        $inmoController->DeleteItem($params[1]);
        break;

    case 'editar':
        $inmoController = new InmoController();
        $inmoController->EditItem($params[1]);
        break;

    default:
        echo ('404 Page not found');
        break;
}
