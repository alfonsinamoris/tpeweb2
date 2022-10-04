<?php
require_once './controller/inmo.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$action = 'propiedades';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$inmoController = new InmoController();

switch ($params[0]) {
    case 'propiedades':
        $inmoController->showProperties();
        break;
    case 'detalle':
        $inmoController->showProperty($params[1]);
    case 'administrador':
        $inmoController->showAdminPage();
        break;
    default:
        echo ('404 Page not found');
        break;
}
