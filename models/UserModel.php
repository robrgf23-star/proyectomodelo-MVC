<?php
class UserModel {
    private $db;
    
    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=test", "user", "pass");
    }
    
    public function getAllUsers() {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getUserById($id) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>