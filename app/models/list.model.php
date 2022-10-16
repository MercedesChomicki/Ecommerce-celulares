<?php

class ListModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_celulares;charset=utf8', 'root', '');
    }

    public function getAllCellphones() {
        $query = $this->db->prepare("SELECT * FROM celular");
        $query->execute();
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ);
        return $cellphones;
    }
    
    function getCellphonesByBrand($brand){
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_marca = ?');
        $query->execute([$brand]);
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ);
        return $cellphones;
    }

    function getCellphone($id){
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_celular = ?');
        $query->execute([$id]);
        $cellphone = $query->fetch(PDO::FETCH_OBJ);
        return $cellphone;
    }

    public function insertCellphone($model, $price, $description, $id_brand) {
      
        $query = $this->db->prepare("INSERT INTO celular (modelo, precio, descripcion, id_marca) VALUES (?, ?, ?, ?)");
        $query->execute([$model, $price, $description, $id_brand]);

        return $this->db->lastInsertId();
    }

    function deleteCellphoneById($id) {
        $query = $this->db->prepare('DELETE FROM celular WHERE id_celular = ?');
        $query->execute([$id]);
    }

    public function updateCellphone($id, $model, $price, $description, $id_brand) {

        $query = $this->db->prepare('UPDATE celular SET modelo = ?, precio = ?, descripcion = ?, id_marca = ? WHERE id_celular = ?');
        $query->execute([$model, $price, $description, $id_brand, $id]);
    }
}
