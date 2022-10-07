<?php

class TypeModel {
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=inmobiliaria;charset=utf8', 'root', '');
    }

    public function showFilters(){
        $query = $this->db->prepare("SELECT * FROM tipo_propiedad");
        $query->execute();
        $tipos = $query->fetchAll(PDO::FETCH_OBJ);
        return $tipos;
        var_dump($tipos);
        
    }

}