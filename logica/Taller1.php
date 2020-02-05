<?php
require_once 'Calculo.php';
class Taller1 extends Calculo{
    public function calcularTaller1($porcentaje){
        return ($this->getNotataller1()*$porcentaje);
    }
}

?>