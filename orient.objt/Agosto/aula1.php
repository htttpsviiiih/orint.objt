<?php

    class Liquidificador{
        private $cor;
        private $marca;
        private $capacidade;
        private $voltagem;
        
        public function __construct(){
            echo "Obejeto novo";

        }

        //metodos
        public function ligar(){
            echo "Ligado \n";
            $this-> ligarMotor();
        }
        public function desligar(){
            echo "Desligado \n";
            $this -> pararMotor();
        }
        public function inverter(){
            $this -> inverterMotor();
        }
        private function ligarMotor(){
            echo "O Motor está ligado \n";
        }
        private function pararMotor(){
            echo "O Motor está desligado \n";
        }
        private function inverterMotor(){
            echo "O motor está sendo invertido \n";
            echo "O motor foi invertido \n";
        }
        
        public function setCor($cor){
            $this -> cor = $cor;
        }
        /**
         * Get the value of marca
         */
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         */
        public function setMarca($marca): self
        {
                $this->marca = $marca;

                return $this;
        }

        /**
         * Get the value of capacidade
         */
        public function getCapacidade()
        {
                return $this->capacidade;
        }

        /**
         * Set the value of capacidade
         */
        public function setCapacidade($capacidade): self
        {
                $this->capacidade = $capacidade;

                return $this;
        }

        /**
         * Get the value of voltagem
         */
        public function getVoltagem()
        {
                return $this->voltagem;
        }

        /**
         * Set the value of voltagem
         */
        public function setVoltagem($voltagem): self
        {
                $this->voltagem = $voltagem;

                return $this;
        }

        /**
         * Get the value of cor
         */
        public function getCor()
        {
                return $this->cor;
        }
    }

    $liquidificador1 = new Liquidificador();
    echo $liquidificador1 -> ligar();
    echo $liquidificador1 -> inverter();
    echo $liquidificador1 -> desligar();
    
    $cor = readline("Qual a cor do seu liquidificador? ");    
    $liquidificador1->setCor($cor);
    
    echo "A cor do liquidificador é: ". $liquidificador1->getCor()."\n";
