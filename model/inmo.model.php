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
      $query = $this->db->prepare("SELECT * FROM propiedades");
      $query->execute();
      $properties = $query->fetchAll(PDO::FETCH_OBJ);
      return $properties;
      $query = $this->db->prepare("SELECT * FROM tipo_propiedad WHERE tipo = ?");
      $query->execute([$property->$tipo]);
      $tipo = $query->fetch(PDO::FETCH_OBJ);

    }
    //muestra el detalle segun el id de la propiedad
    public function showPropertyDetail($id_propiedad){
        $query = $this->db->prepare("SELECT * FROM propiedades WHERE id_propiedad=?");
        $query->execute(array($id_propiedad));
        $property = $query->fetch(PDO::FETCH_OBJ);
        return $property;
    }
    //inserta valores en la db
    public function insertItem($direccion, $tipo, $habitaciones,$precio,$alquiler_venta){
        $query = $this->db->prepare("INSERT INTO `propiedades`(`direccion`, `tipo`, `habitaciones`,`precio`,`alquiler_venta`) VALUES(?,?,?,?,?)");
        $query->execute([$direccion, $tipo, $habitaciones,$precio,$alquiler_venta]);
        return $this->db->lastInsertId();
    }
    //borra item x id
    public function DeleteItemById($id_propiedad){
        $query = $this->db->prepare('DELETE FROM propiedades WHERE id_propiedad=?');
        $query->execute(array($id_propiedad));
    }
}