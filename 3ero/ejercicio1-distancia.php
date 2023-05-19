<?php

require_once 'ejercicio1-calculador.php';

class Distancia
{
    public $tiempo;
    public $velocidad;

    function __construct($tiempo, $velocidad)
    {
        $this->tiempo=$tiempo;
        $this->velocidad=$velocidad;
    }

    /*
    La funcion Calculo recibe parametros Velocidad, Tiempo
        DISTANCIA = VELOCIDAD * TIEMPO
    */
    function Calculo()
    {
        $distancia=$this->velocidad*$this->tiempo;
        return $distancia;
    }
}

?>