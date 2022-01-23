<?php

//$frutas = array("m"=>"mango", "f"=>"fresa", "n"=>"naranja", "a"=>"manzana");
$frutas = array("mango", "fresa", "naranja", "manzana");

print_r($frutas);

echo $frutas[2];

for($indice=0;$indice<3;$indice++){
 
    echo $frutas[$indice]. "<br/>";

}

?>