<?php

class InmoModel {
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=inmobiliaria;charset=utf8', 'root', '');
    }

    public function getAllProperties(){
        $query = $this->db->prepare("SELECT * FROM propiedades");
        $query->execute();
        $properties = $query->fetchAll(PDO::FETCH_OBJ);
        return $properties;
    }

    public function showWithFilters(){


    }

    public function showPropertyDetail($id){
        $query = $this->db->prepare("SELECT * FROM propiedades WHERE id=?");
        $query->execute(array($id));
        $property = $query->fetch(PDO::FETCH_OBJ);
        return $property; //singular mostrando la propiedad seleccionada
    }


}