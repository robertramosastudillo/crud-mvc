<?php

require_once 'models/persona.php';

class PersonaController {

    public function index(){
        $personas = new Persona();
        $personas = $personas->getAll();

        require_once 'views/persona/index.php';
    }

    public function create(){
        
        require_once 'views/persona/create.php';
    }

    public function save(){
        if($_POST){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $edad = isset($_POST['edad']) ? $_POST['edad'] : false;
            
            if($nombre && $apellido && $edad){
                $persona = new Persona();
                $persona->setNombre($nombre);
                $persona->setApellido($apellido);
                $persona->setEdad($edad);

                $save = $persona->save();

                if($save){
                    echo 'El registro creado exitosamente';
                }else{
                    echo 'El registro No se Pudo crear';
                }
            }
        }

        header('Location: http://localhost/crud-persona/?controller=Persona&action=index');
        
    }

    public function edit(){

        if(isset($_GET['id'])){
            
            $id = $_GET['id'];
            $personas = new Persona();
            $personas->setId($id);

            $personas = $personas->getOne();

            require_once 'views/persona/edit.php';
        }else{
            header('Location: http://localhost/crud-persona/?controller=Persona&action=index');
        }   
    }

    public function update(){
        
        if($_POST){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $edad = isset($_POST['edad']) ? $_POST['edad'] : false;

            if($nombre && $apellido && $edad){
                $persona = new Persona();
                $persona->setNombre($nombre);
                $persona->setApellido($apellido);
                $persona->setEdad($edad);

                if(isset($_GET['id'])){

                    $id = $_GET['id'];
                    $persona->setId($id);
        
                    $update = $persona->update();
        
                    if($update){
                        echo 'El registro se ha actualizado exitosamente';
                    }else{
                        echo 'El registro NO se ha podido actualizarse';
                    }
                }
            }
        }
            header('Location: http://localhost/crud-persona/?controller=Persona&action=index');
    }

    public function delete(){

        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $persona = new Persona();
            $persona->setId($id);

            $delete = $persona->delete();

            if($delete){
                echo 'El registro se ha eliminado correctamente';
            }else{
                echo 'El registro NO se ha podido eliminar';
            }
        }

        header('Location: http://localhost/crud-persona/?controller=Persona&action=index');
    }
}