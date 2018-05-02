<?php
require_once ("Persona.php");

class Pedido extends Persona {
    var $fecha;
    var $importe;

    function __construct ($nombre,$edad,$fecha,$importe){
        parent::__construct ($nombre, $edad);
        $this->fecha= $fecha;
        $this->importe= $importe;
    }

    function getFecha (){
        return $this->fecha;
    }

    function setImporte ($importe){
        $this->importe = $importe;
    }

    function mostrar () {
        parent::mostrar();
        echo $this->getFecha()." <br>";
        echo $this->getImporte()." <br>";
    }
}

?>