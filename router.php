<?php
require_once './controller/inmo.controller.php';
require_once './controller/admin.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$action = 'propiedades';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$inmoController = new InmoController();
$adminController = new adminController();

switch ($params[0]) {
    case 'propiedades':
        $inmoController->showProperties();
        break;
    case 'detalle': //muestro el detalle de cada item- mando funcion al controller USER
        $inmoController->showProperty($params[1]);
    case 'administrador'://muestro el form para acceder a ADMIN
        $adminController->showAdminPage();
        break;
    case 'agregar'://agrego item con form - mando funcion al controller ADMIN
        $adminController->AddItem();
        break;
    case 'borrar'://borro item con boton - mando al controller ADMIN
        $adminController->DeleteItem($params[1]);
        break;
    case 'editar':
        $adminController->EditItem();
        break;
    default:
        echo ('404 Page not found');
        break;
}
