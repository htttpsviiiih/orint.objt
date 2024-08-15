<?php
class Retangulo
    {
        public $altura;
        public $base;
        function __construct($a=0,$b=0){
            $this -> altura =$a;
            $this -> base =$b; 
        }
        // Metodos
        function falaArea(){
            return $this -> altura * $this-> base;
        }
        function falaPerimetro(){
            return $this -> altura +  $this-> base + $this -> altura +  $this-> base;
        }
    }
    for ($i=1; $i != 4; $i++) { 
        echo "*******************************************************************\n";
        $altura = readline("Digite qual a altura: ");
        $base = readline("Digite qual é a base: ");
        $retangulo1 = new Retangulo($altura,$base);
        echo "*******************************************************************\n";
        echo "A área do retangulo ".$i." é: ". $retangulo1 -> falaArea()."\n";
        echo "O perimetro do retangulo ".$i." é: ".$retangulo1 -> falaPerimetro()."\n";
    }
