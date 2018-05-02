<?php
class Persona {

    var $nombre;
    var $edad;

    function __construct ($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;

    }
    function setNombre ($nombre) {
        $this->$nombre = $nombre;
    }
    function getNombre () {
        return $this->nombre;
    } 
    function setEdad ($edad) {
        $this->$edad = $edad;
    }

    function getEdad () {
        return $this->edad;
    }

    function mostrar () {

        echo "Soy ".$this->nombre." y tengo ".$this->edad." años.<br>";

    }



class Cliente extends Persona {
    var $pedidos;

    function __construct ($nombre, $edad, $pedidos) {
        parent::__construct ($nombre, $edad);
        $this->pedidos = $pedidos;

    }

    function setPedidos ($pedidos) {
        $this->pedidos = $pedidos;
    }

    function getPedidos () {

        return $this->pedidos;

    }



    function mostrar() {
        parent::mostrar();
        echo "a Pedido " . $this->getPedidos() . " pedidos<br>";

    }

}



$a = new Persona("Pedro",25,100 );
$b = new Persona ("Luis", 31,250);
$c = new Persona ("Arturo",29,17.10);




