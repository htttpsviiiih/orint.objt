<?php

    class Retangulo
    {
        public $altura;
        public $base;
        // Metodos
        function falaArea(){
            return $this -> altura * $this-> base;
        }
        function falaPerimetro(){
            return $this -> altura +  $this-> base + $this -> altura +  $this-> base;
        }
    }
    for ($i=1; $i != 4; $i++) { 

        $retangulo1 = new Retangulo();
        $retangulo1 -> altura = readline("Digite qual a altura: ");
        $retangulo1 -> base = readline("Digite qual é a base: ");
        echo "A área do retangulo ".$i." é: ". $retangulo1 -> falaArea()."\n";
        echo "O perimetro do retangulo ".$i." é: ".$retangulo1 -> falaPerimetro()."\n";
    }
