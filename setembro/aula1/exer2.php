<?php

    class Trapezio{
        private float $baseMaior;
        private float $baseMenor;
        private float $altura;

        /**
         * Get the value of baseMaior
         */
        public function getBaseMaior(): float
        {
                return $this->baseMaior;
        }

        /**
         * Set the value of baseMaior
         */
        public function setBaseMaior(float $baseMaior): self
        {
                $this->baseMaior = $baseMaior;

                return $this;
        }

        /**
         * Get the value of baseMenor
         */
        public function getBaseMenor(): float
        {
                return $this->baseMenor;
        }

        /**
         * Set the value of baseMenor
         */
        public function setBaseMenor(float $baseMenor): self
        {
                $this->baseMenor = $baseMenor;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura(): float
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura(float $altura): self
        {
                $this->altura = $altura;

                return $this;
        }
        public function getCalculo(){
            
        }
    }