<?php
require_once 'Calculo.php';
class Taller2 extends Calculo{
    public function calcularTaller2($porcentaje){
        return ($this->getNotataller2()*$porcentaje);
    }
}

?>