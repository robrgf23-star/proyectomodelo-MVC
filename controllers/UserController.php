<?php
require_once 'models/UserModel.php';

class UserController {
    private $model;
    
    public function __construct() {
        $this->model = new UserModel();
    }
    
    public function listUsers() {
        $users = $this->model->getAllUsers();
        require 'views/user-list.php';
    }
    
    public function showUser($id) {
        $user = $this->model->getUserById($id);
        require 'views/user-profile.php';
    }
}
?>