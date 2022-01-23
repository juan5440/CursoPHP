<?php
  $servidor = "localhost";
  $usuario = "root";
  $password = "";
 
  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password );      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa";

        $sql="SELECT * FROM `fotos`";
        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();

        $resultado=$sentencia->fetchAll();
        print_r($resultado);

        foreach($resultado as $foto){
        echo $foto['nombre']."<br/>";
        }
      }
 
  catch(PDOException $error)
      {
      echo "La conexión ha fallado: " .$error;
      }
 


?>