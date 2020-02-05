<?php
if(isset($_POST["btncalcular"])){
require_once 'logica/Taller1.php';
require_once 'logica/Taller2.php';
require_once 'logica/Cuestionario1.php';
require_once 'logica/Cuestionario2.php';
require_once 'logica/Proyectofinal.php';

$notaTaller1 = $_POST["txttaller1"];
$notaTaller2 = $_POST["txttaller2"];
$notaCuestionario1 = $_POST["txtcuestionario1"];
$notaCuestionario2 = $_POST["txtcuestionario2"];
$notaProyectofinal = $_POST["txtproyectofinal"];

$objTaller1 = new Taller1();
$objTaller2 = new Taller2();
$objCuestionario1 = new Cuestionario1();
$objCuestionario2 = new Cuestionario2();
$objProyectofinal = new Proyectofinal();

$objTaller1->setNotataller1($notaTaller1);
$objTaller2->setNotataller2($notaTaller2);
$objCuestionario1->setNotacuestionario1($notaCuestionario1);
$objCuestionario2->setNotacuestionario2($notaCuestionario2);
$objProyectofinal->setNotaproyectofinal($notaProyectofinal);
$fecha = date('d-m-Y');

echo "Nota promedio del taller #1: " . $objTaller1->calcularTaller1(0.20);
echo "<br>Nota promedio del taller #2: " . $objTaller2->calcularTaller2(0.15);
echo "<br>Nota promedio del cuestionario #1: " . $objCuestionario1->calcularCuestionario1(0.22);
echo "<br>Nota promedio del cuestionario #2: " . $objCuestionario2->calcularCuestionario2(0.10);
echo "<br>Nota promedio del Proyecto Final: " . $objProyectofinal->calcularProyectofinal(0.33) . "<br>";
echo "<br><b>Nota definitiva: </b>" . $notaDefinitiva = $objTaller1->calcularTaller1(0.20)+$objTaller2->calcularTaller2(0.15)+$objCuestionario1->calcularCuestionario1(0.22)+$objCuestionario2->calcularCuestionario2(0.10)+$objProyectofinal->calcularProyectofinal(0.33);
 
    if($notaDefinitiva>=0 && $notaDefinitiva<=0.99){
        echo "<br><b>Desempeño: </b>Super deficiente, debe pagar la materia completa nuevamente <b>($500.000)</b>.";
    }else if($notaDefinitiva>=1 && $notaDefinitiva<=1.99){
        echo "<br><b>Desempeño: </b>Deficiente, debe pagar el 50% de la materia <b>($250.000)</b>.";
    }else if($notaDefinitiva>=2 && $notaDefinitiva<=2.99){
        echo "<br><b>Desempeño: </b>Insuficiente, debe pagar el 10% de la materia <b>($50.000)</b>.";
    }else if($notaDefinitiva>=3 && $notaDefinitiva<=3.99){
        echo "<br><b>Desempeño: </b>Aceptable.";
    }else if($notaDefinitiva>=4 && $notaDefinitiva<=4.99){
        echo "<br><b>Desempeño: </b>Sobresaliente.";
    }else if($notaDefinitiva==5){
        echo "<br><b>Desempeño: </b>Excelente, <b>gana beca educativa</b>.";
    }
    if($notaDefinitiva>5){
        echo "<br><b>Error crítico: </b>La nota definitiva excede el limite establecido <b>(5)</b>.";
    } 
echo "<br><b>Fecha en la que se hizo el calculo: </b>".$fecha;
}
?>