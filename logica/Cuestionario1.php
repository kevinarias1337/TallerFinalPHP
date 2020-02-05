<?php
require_once 'Calculo.php';
class Cuestionario1 extends Calculo{
    public function calcularCuestionario1($porcentaje){
        return ($this->getNotacuestionario1()*$porcentaje);
    }
}
?>