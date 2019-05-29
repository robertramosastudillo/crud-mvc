<?php

class Persona {
    
    // Properties

    private $id;
    private $nombre;
    private $apellido;
    private $edad;

    private $db;

    // Construct

    public function __construct(){
        $this->db = Database::connect();
    }

    // Setters

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    // Getters

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    // Methods

    public function save(){
        $sql = "INSERT INTO personas VALUES(NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getEdad()}')";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $result;
    }

    public function update(){
        $sql = "UPDATE personas SET
            nombre = '{$this->getNombre()}',
            apellido = '{$this->getApellido()}',
            edad = '{$this->getEdad()}'";
        $update = $this->db->query($sql);

        $result = false;

        if($update){
            $result = true;
        }

        return $result;
    }

    public function delete(){
        $sql = "DELETE FROM personas WHERE id = {$this->getId()}";
        $delete = $this->db->query($sql);

        $result = false;

        if($delete){
            $result = true;
        }

        return $result;
    }

    public function getAll(){
        $personas = $this->db->query("SELECT * FROM personas ORDER BY id DESC");
        return $personas;
    }

    public function getOne(){
        $personas = $this->db->query("SELECT * FROM personas WHERE id = {$this->getId()}");
        return $personas->fetch_object();
    }
}