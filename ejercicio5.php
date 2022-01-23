<?php
if($_POST){
//Recibir informacion del fromulario HTML (metodo POST)
$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];

//concatenacion
echo "Hola ".$nombre." ".$apellido;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="ejercicio5.php" method="post">
            Nombre:
            <input type="text" name="txtNombre" id="txtNombre">
            <br>
            <br>
            Apellido:
            <input type="text" name="txtApellido" id="txtApellido">
            <br>
            <input type="submit" value="Eviar">
        </form>
    </body>
</html>