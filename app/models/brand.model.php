<?php

class BrandModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_celulares;charset=utf8', 'root', '');
    }

    function getCellphonesByBrand($brand)
    {
        $query = $this->db->prepare('SELECT * FROM celular WHERE id_marca = ?');
        $query->execute([$brand]);
        $cellphones = $query->fetchAll(PDO::FETCH_OBJ);
        return $cellphones;
    }

}
