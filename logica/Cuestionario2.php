<?php
require_once 'Calculo.php';
class Cuestionario2 extends Calculo{
    public function calcularCuestionario2($porcentaje){
        return ($this->getNotacuestionario2()*$porcentaje);
    }
}
?>