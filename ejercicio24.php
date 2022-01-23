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

$objAlumno = new persona(); // instancia o creacion de un objeto
$objAlumno->asignarNombre("Juan"); // llamando un metodo

$objAlumno2= new persona();
$objAlumno2->asignarNombre("Jose");
$objAlumno2->imprimeNombre();

echo $objAlumno2->nombre ."<br/>";
echo $objAlumno->nombre."<br/>"; // imprimir una propiedad
echo $objAlumno2->mostrarEdad()."<br/>";



?>