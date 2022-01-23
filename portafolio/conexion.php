<?php

class conexion{

    private $servidor="localhost";
    private $usuario="root";
    private $contrasena="";

    public function __construct(){

        try{
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOExeption $e){
            return "falla de conexion";
        }
    }
    //instruccion para modificar, editar , insertar y eliminar
    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

}

?>