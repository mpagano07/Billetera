<?php

class MostradorEnDolares implements Mostrador {
  public function mostrar(Array $billetes) {
    $total = 0;
    foreach ($billetes as $billete => $cantidad) {
      $total += ($billete*$cantidad) / 42;
    }
    return $total;
  }
}