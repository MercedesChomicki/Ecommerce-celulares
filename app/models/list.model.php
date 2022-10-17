<?php

class ListModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_celulares;charset=utf8', 'root', '');
    }

    function getCellphone($id)
    {
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_celular = ?');
        $query->execute([$id]);
        $cellphone = $query->fetch(PDO::FETCH_OBJ);
        return $cellphone;
    }

    public function getAllCellphones()
    {
        $query = $this->db->prepare("SELECT * FROM celular");
        $query->execute();
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ);
        return $cellphones;
    }

    function getAllBrands(){
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();
        $brands = $query->fetchAll(PDO::FETCH_OBJ);
        return $brands;
    }

    public function insertCellphone($model, $price, $description, $id_brand, $image=null, $fileTemp = null)
    {
        $filePath= $this->uploadImage($image, $fileTemp);
        
        $query = $this->db->prepare("INSERT INTO celular (modelo, precio, descripcion, id_marca, Imagen) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$model, $price, $description, $id_brand, $filePath]);

        return $this->db->lastInsertId();
    }

    public function updateCellphone($id, $model, $price, $description, $id_brand, $image = null, $fileTemp=null)
    {
        $filePath= $this->uploadImage($image, $fileTemp);
        
        $query = $this->db->prepare('UPDATE celular SET modelo = ?, precio = ?, descripcion = ?, id_marca = ?, Imagen = ? WHERE id_celular = ?');
        $query->execute([$model, $price, $description, $id_brand, $filePath, $id]);
    }

    function uploadImage($image, $fileTemp){
        $filePath = "images/" . uniqid("", true) . "." . strtolower(pathinfo($image, PATHINFO_EXTENSION));
        move_uploaded_file($fileTemp, $filePath);
        return $filePath;
    }

    function deleteCellphoneById($id)
    {
        $query = $this->db->prepare('DELETE FROM celular WHERE id_celular = ?');
        $query->execute([$id]);
    }


}
