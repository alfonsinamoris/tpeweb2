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
    case 'detalle':
        $inmoController->showProperty($params[1]);
    case 'administrador':
        $adminController->showAdminPage();
        break;
    case 'agregar':
        $adminController->AddItem();
        break;
    case 'borrar':
        $id_propiedad = $params[1];
        $adminController->DeleteItem($id_propiedad);
        break;
    case 'editar':
        $adminController->EditItem();
        break;
    default:
        echo ('404 Page not found');
        break;
}
