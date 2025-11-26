<?php
require_once 'controllers/UserController.php';

$controller = new UserController();
$action = $_GET['action'] ?? 'listUsers';

switch ($action) {
    case 'profile':
        $controller->showUser($_GET['id']);
        break;
    case 'list':
    default:
        $controller->listUsers();
        break;
}
?>