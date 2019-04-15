<?php

class BilleteraConMostrador
{
    private $mostrador;
    private $billetes = array(
        5 => 0,
        10 => 0,
        20 => 0,
        50 => 0,
        100 => 0,
        200 => 0,
        500 => 0,
        1000 => 0
    );
    public function __construct($mostrador)
    {
        $this->mostrador = $mostrador;    
    }
    public function agregar($billete,$cantidad)
    {
        $this->billetes[$billete] += $cantidad;
        return true;
    }
    public function sacar($billete,$cantidad)
    {
        if ($this->billetes[$billete] != 0) {
            $this->billetes[$billete] -=  $cantidad;
            return true;
        }
        return false;
    }
    public function mostrar()
    {
        return $this->mostrador->mostrar($this->billetes);
    }
}


// adaptar BilleteraConMostrador para que funcione 
// con BilleteraConMostradorTest,
// hay que agregar una clase aparte mostradorEnPesos (ya creada)
// y llamarla 
// desde BilleteraConMostrador.