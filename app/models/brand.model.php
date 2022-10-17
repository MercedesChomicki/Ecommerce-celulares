<?php

class BrandModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_celulares;charset=utf8', 'root', '');
    }

    function getBrand($id){
        $query = $this->db->prepare('SELECT * FROM marca WHERE id_marca = ?');
        $query->execute([$id]);
        $brand = $query->fetch(PDO::FETCH_OBJ);
        return $brand;
    }

    function getAllBrands(){
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();
        $brands = $query->fetchAll(PDO::FETCH_OBJ);
        return $brands;
    }

    function getCellphonesByBrand($brand)
    {
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_marca = ?');
        $query->execute([$brand]);
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ);
        return $cellphones;
    }

    function addBrand($name){
        
        $query = $this->db->prepare("INSERT INTO marca (nombre) VALUES (?)");
        $query->execute([$name]);

        return $this->db->lastInsertId();
    }

    function deleteBrandById($id_marca){
        $query = $this->db->prepare('DELETE FROM marca WHERE id_marca = ?');
        $query->execute([$id_marca]);
    }

    function updateBrand($id, $name){
        $query = $this->db->prepare('UPDATE marca SET nombre = ? WHERE id_marca = ?');
        $query->execute([$name, $id]);
    }

}
