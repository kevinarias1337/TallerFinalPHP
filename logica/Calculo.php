<?php
class Calculo{

    private $notaTaller1;
    private $notaTaller2;
    private $notaCuestionario1;
    private $notaCuestionario2;
    private $notaProyectofinal;

    public function __construct(){
        $this->notaTaller1=0;
        $this->notaTaller2=0;
        $this->notaCuestionario1=0;
        $this->notaCuestionario2=0;
        $this->notaProyectofinal=0;
    }

    // public function __construct1($nt1, $nt2, $nc1, $nc2, $npf){
    //   $this->notaTaller1=$nt1;
    //  $this->notaTaller2=$nt2;
    //  $this->notaCuestionario1=$nc1;
    //  $this->notaCuestionario2=$nc2;
    //  $this->notaProyectoFinal=$npf;
    //}

    protected function getNotataller1(){
        return $this->notaTaller1;
    }
    public function setNotataller1($nota){
        $this->notaTaller1=$nota;
    }

    protected function getNotataller2(){
        return $this->notaTaller2;
    }
    public function setNotataller2($nota){
        $this->notaTaller2=$nota;
    }

    protected function getNotacuestionario1(){
        return $this->notaCuestionario1;
    }
    public function setNotacuestionario1($nota){
       $this->notaCuestionario1=$nota;
    }

    protected function getNotacuestionario2(){
        return $this->notaCuestionario2;
    }
    public function setNotacuestionario2($nota){
        $this->notaCuestionario2=$nota;
    }

    protected function getNotaproyectofinal(){
        return $this->notaProyectofinal;
    }
    public function setNotaproyectofinal($nota){
        $this->notaProyectofinal=$nota;
    }

}
?>