<?php

class ListModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_celulares;charset=utf8', 'root', '');
    }

    
    //Devuelve la lista de celulares completa.
    public function getAllCellphones() {
        $query = $this->db->prepare("SELECT * FROM celular");
        $query->execute();
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $cellphones;
    }
    
    // Obtiene la lista de celulares de la DB según id_marca
    function getCellphonesByBrand($brand){
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_marca = ?');
        $query->execute([$brand]);
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ);
        return $cellphones;
    }

    //Obtiene celular segun id
    function getCellphone($id){
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_celular = ?');
        $query->execute([$id]);
        $cellphone = $query->fetch(PDO::FETCH_OBJ);
        return $cellphone;
    }

    // /**
    //  * Inserta una tarea en la base de datos.
    //  */
    public function insertCellphone($model, $price, $description, $id_brand) {
      
        $query = $this->db->prepare("INSERT INTO celular (modelo, precio, descripcion, id_marca) VALUES (?, ?, ?, ?)");
        $query->execute([$model, $price, $description, $id_brand]);

        return $this->db->lastInsertId();
    }


    // /**
    //  * Elimina una tarea dado su id.
    //  */
    // function deleteTaskById($id) {
    //     $query = $this->db->prepare('DELETE FROM task WHERE id = ?');
    //     $query->execute([$id]);
    // }

    // public function finalize($id) {
    //     $query = $this->db->prepare('UPDATE task SET finalizada = 1 WHERE id = ?');
    //     $query->execute([$id]);
    //     // var_dump($query->errorInfo()); // y eliminar la redireccion
    // }
}
