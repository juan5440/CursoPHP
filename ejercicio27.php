<?php


class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un metodo estatico ";
    }
}


$obj=new unaClase();
$obj->unMetodo();

UnaClase::unMetodo();






?>