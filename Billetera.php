<?php

class Billetera
{
    private $billetera = array(
        5 => 0,
        10 => 0,
        20 => 0,
        50 => 0,
        100 => 0,
        200 => 0,
        500 => 0,
        1000 => 0
    );
    public function mostrar()
    {
        $total = 0;
        foreach ($this->billetera as $denominacion => $cantidad) {
            $total += ($denominacion * $cantidad) ;
        }
        return $total;
    }

    public function agregar($denominacion,$cantidad)
    {
        $this->billetera[$denominacion] += $cantidad;
        return true;
    }
    public function sacar($denominacion,$cantidad)
    {
        if ($this->billetera[$denominacion] != 0) {
            $this->billetera[$denominacion] -=  $cantidad;
            return true;
        }
        return false;

    }
}


// mostrar
//     return del valor del contenido de la billetera 
// agregar billete
//     denominacion del billete
//     cantidad de billetes 
// sacar billete
//     denominacion del billete
//     cantidad de billetes 
