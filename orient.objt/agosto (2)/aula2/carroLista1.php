<?php

    class Carro{
        private $modelo;
        private $marca;
        private $anoFabricacao;
        private $velocidadeMax;
        public function dados(){
            return "É um ".$this->getModelo()."<>" .$this->getMarca()." fabricado em ".$this->getAnoFabricacao(). ", com velocidade
                máxima de" .$this->getVelocidadeMax()."km/h.\n";       
        }
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
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
         * Get the value of anoFabricacao
         */
        public function getAnoFabricacao()
        {
                return $this->anoFabricacao;
        }

        /**
         * Set the value of anoFabricacao
         */
        public function setAnoFabricacao($anoFabricacao): self
        {
                $this->anoFabricacao = $anoFabricacao;

                return $this;
        }

        /**
         * Get the value of velocidadeMax
         */
        public function getVelocidadeMax()
        {
                return $this->velocidadeMax;
        }

        /**
         * Set the value of velocidadeMax
         */
        public function setVelocidadeMax($velocidadeMax): self
        {
                $this->velocidadeMax = $velocidadeMax;

                return $this;
        }
    }
        $comparador = array(); 
        for ($i=1; $i <4 ; $i++) { 
            $carro = new Carro();
            echo "====================================================================\n";
            $modelo = readline("Digite o modelo do carro: ");
            $carro->setModelo($modelo);
            $anoFabricacao =readline("Digite o ano de fabricacação: ");
            $carro-> setAnoFabricacao($anoFabricacao);
            $marca = readline("Digite a marca: ");
            $carro-> setMarca($marca);
            $velocidade = readline("Digite a velocidade maxima do seu carro: ");
            $carro->setVelocidadeMax($velocidade);
            
            array_push($comparador,$carro);
            
        }
        
        $carro1 = $comparador[0];
        $carro2 = $comparador[1];
        $carro3 = $comparador[2];
            if ($carro1->getVelocidadeMax() > $carro2->getVelocidadeMax() && $carro1->getVelocidadeMax()>$carro3->getVelocidadeMax()) {
                echo  "O carro mais rápido é um: " .  $carro1->dados();
            }elseif($carro2->getVelocidadeMax() > $carro3->getVelocidadeMax() && $carro2->getVelocidadeMax()>$carro1->getVelocidadeMax()){
                echo  "O carro mais rápido é um: " .  $carro2->dados();
            }elseif ($carro3->getVelocidadeMax() > $carro2->getVelocidadeMax() && $carro3->getVelocidadeMax()>$carro1->getVelocidadeMax()) {
                echo  "O carro mais rápido é um: " .  $carro3->dados();
            }
            if ($carro1->getVelocidadeMax()< $carro2->getVelocidadeMax() && $carro1->getVelocidadeMax()<$carro3->getVelocidadeMax()) {
                echo  "O carro mais lento é um: " .  $carro1->dados();
            }elseif($carro2->getVelocidadeMax() < $carro3->getVelocidadeMax() && $carro2->getVelocidadeMax()<$carro1->getVelocidadeMax()){
                echo  "O carro mais lento é um: " .  $carro2->dados();
            }elseif ($carro3->getVelocidadeMax() < $carro2->getVelocidadeMax() && $carro3->getVelocidadeMax()<$carro1->getVelocidadeMax()) {
                echo  "O carro mais lento é um: " .  $carro2->dados();
            }