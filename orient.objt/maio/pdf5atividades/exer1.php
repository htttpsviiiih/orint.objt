<?php

    class Animal
    {
        public $especie;
        public $pele;
        public $movimentacao;
        public $tipoSom;
        public $qntPatas;
        function __construct($e=0,$p=0,$m=0,$s =0,$qp =0)
        {
            $this-> especie = $e;
            $this-> pele = $p;
            $this-> movimentacao = $m;
            $this-> tipoSom = $s;
            $this-> qntPatas = $qp;
            
        }
        function qualEspecie(){
            return $this -> especie;
        }
        function tipoDePele(){
            return $this -> pele;
        }
        function ondeMovimenta(){
            return $this -> movimentacao;
        }
        function emitirSom(){
            return $this-> tipoSom;
        }
        function quantPatas(){
		return $this-> qntPatas;
        }
    }
    echo "============================================================================\n";
    $especie = readline("Qual é o animal? ");
    $pele = readline ("Qual o tipo de pele desse animal? ");
    $movimentacao = readline("Ele anda na terra ou voa no céu? ");
    $som = ", emite som";
    $patas = readline("Qual a quantidade de patas desse animal? ");
    echo "============================================================================\n";
    $animal1 = new Animal($especie,$pele,$movimentacao,$som,$patas);
    echo "A especie do animal é: ". $animal1-> qualEspecie() .", se movimenta na ".$animal1 ->ondeMovimenta(), $animal1 -> emitirSom()." e tem ".$animal1 -> quantPatas()." patas.\n";
