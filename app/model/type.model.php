<?php

class TypeModel {
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=inmobiliaria;charset=utf8', 'root', '');
    }

    public function getTypeById($id_tipo){
        $query = $this->db->prepare("SELECT * FROM tipo_propiedad WHERE id_tipo=?");
        $query->execute(array($id_tipo));
        $tipo = $query->fetch(PDO::FETCH_OBJ);
        return $tipo;
    }

    public function showFilters(){
        $query = $this->db->prepare("SELECT * FROM tipo_propiedad");
        $query->execute();
        $tipos = $query->fetchAll(PDO::FETCH_OBJ);
        return $tipos;    
    }


    public function DeleteCategorybyId($id_tipo){
        $query = $this->db->prepare("DELETE FROM tipo_propiedad WHERE id_tipo = ?");
        $query->execute(array($id_tipo));

    }

    public function InsertCategory($tipo){
        $query = $this->db->prepare("INSERT INTO tipo_propiedad(`tipo`) VALUES(?)");
        $query->execute(array($tipo));
        return $this->db->lastInsertId();
    }

    public function EditCategorybyId($tipo,$id_tipo){
        $query = $this->db->prepare("UPDATE tipo_propiedad SET tipo=? WHERE id_tipo = ?");
        $query->execute(array($tipo,$id_tipo));
    }
}