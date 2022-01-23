<?php
  $servidor = "localhost";
  $usuario = "root";
  $password = "";
 
  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password );      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa";

        $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'provando', 'mi_foto.png');";
        $conexion->exec($sql);
      }
 
  catch(PDOException $error)
      {
      echo "La conexión ha fallado: " .$error;
      }
 


?>