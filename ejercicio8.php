<?php
if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA+$valorB;
    $resta = $valorA-$valorB;
    $multiplicacion = $valorA*$valorB;
    $divicion = $valorA/$valorB;

    echo "<br/>","La suma es:".$suma;
    echo "<br/>","La resta es:".$resta;
    echo "<br/>","La multiplicacion es:".$multiplicacion;
    echo "<br/>","La divicion es:".$divicion."<br/>";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        Valor a:
        <input type="text" name="valorA" id="">
        <br/>
        <br/>
        Valor b:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>