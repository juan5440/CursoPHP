<?php


class persona{

    public $nombre; //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ //acciones o metodos

        $this->nombre=$nuevoNombre;
    }
    public function imprimeNombre(){
        echo "Hola Soy ". $this->nombre."<br/>";
    }
    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

class trabajador extends persona{
    public $puesto;

    public function presentarTrabajador(){
        echo "Hola soy ".$this->nombre."y soy un ".$this->puesto;
    }

}

$objTrabajador = new trabajador(); // instancia o creacion de un objeto
$objTrabajador->asignarNombre("Juan Soto"); // llamando un metodo
$objTrabajador->imprimeNombre();







?>