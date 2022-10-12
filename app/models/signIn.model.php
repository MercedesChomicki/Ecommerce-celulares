<?php

class SignInModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_celulares;charset=utf8', 'root', '');
    }

    function saveUser($email, $password){
        $query = $this->db->prepare("INSERT INTO usuario (email, password) VALUES (?, ?)");
        $query->execute([$email, $password]);
    }

}