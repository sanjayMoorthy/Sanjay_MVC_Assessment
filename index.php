<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'create':
            $controller->create($_POST);
            break;
        case 'edit':
            $controller->update($_POST['edit']);
            break;
        case 'delete':
            $controller->delete($_POST['delete']);
            break;
        case 'view':
            $controller->view($_POST['edit']);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
