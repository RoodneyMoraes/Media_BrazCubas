<?php
    ini_set('display_errors',0);

    class Media{
        
        private $a1;
        private $a2;
        private $a3;
        private $a4;
        private $v1;
        private $p1;


        public function getA1(){
            return $this->a1;
        }

        public function setA1($a1){
            $this->a1 = $a1;
        }
        
        public function getA2(){
            return $this->a2;
        }

        public function setA2($a2){
            $this->a2 = $a2;
        }

        public function getA3(){
            return $this->a3;
        }
        public function setA3($a3){
            $this->a3 = $a3;
        }
        
        public function getA4(){
            return $this->a4;
        }

        public function setA4($a4){
            $this->a4 = $a4;
        }

        public function getV1(){
            return $this->v1;
        }

        public function setV1($v1){
            $this->v1 = $v1;
        }

        public function getP1(){
            return $this->p1;
        }

        public function setP1($p1){
            $this->p1 = $p1;
        }

        
        public function setValores($a1, $a2, $a3, $a4, $v1, $p1){
            
             $this->a1 = $a1;
             $this->a2 = $a2;
             $this->a3 = $a3;
             $this->a4 = $a4;
             $this->v1 = $v1;
             $this->p1 = $p1;
            
        }


        
        public function calcularMedia(){

            $a1 = $this->getA1();
            $a2 = $this->getA2();
            $a3 = $this->getA3();
            $a4 = $this->getA4();
            $v1 = $this->getV1();
            $p1 = $this->getP1();
            $s = ($a1+$a2+$a3+$a4);
            
            $resultado = (3/40*$s)+(1.8/10*$v1)+(5.2/10*$p1);
            $resultado = number_format($resultado, 2, '.', ' ');
            $rs = explode('.', $resultado);
            //echo $rs[1];die;
            if($rs[1] >=75){
                $resultado = number_format($resultado, 0, '.', ' ');
            }

            return $resultado;
        }
    }

    $media = new Media();
    $media->setValores($_GET['a1'], $_GET['a2'], $_GET['a3'], $_GET['a4'], $_GET['v1'], $_GET['p1']);
    $resultado = $media->calcularMedia();

    if(isset($_GET['a1'])){
        if($resultado >= 5.75){
            $teste = "green darken-1";
        }else{
            $teste = "red darken-1";
        }
        $tela = '<div class="card-panel white-text '.$teste.' "><h5 class="center">Média Final:  <b>'.$resultado.'</b></h5></div>';
    }else{
        $tela = 'Seja bem vindo!';
    }



?>