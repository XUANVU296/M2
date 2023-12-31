<?php
include 'db.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controllers = isset($_GET['controllers']) ? $_GET['controllers'] : 'Customers';

switch ($controllers) {
    case 'Customers':
        require 'controllers/customersControllers.php';
        $objController = new CustomersControllers();
        break;       
    default:
        # code...
        break;
}
switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
    case 'show':
        $objController->show();
        break;
    case 'destroy':
        $objController->destroy();
        break;
    case 'search':
        $objController->search();
        break;    
    default:
        # code...
        break;
}
?>