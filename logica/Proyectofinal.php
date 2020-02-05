<?php
require_once 'Calculo.php';
class Proyectofinal extends Calculo{
    public function calcularProyectoFinal($porcentaje){
        return ($this->getNotaproyectofinal()*$porcentaje);
    }
}
?>