<?php

    class Departamento{
        private string $nome;
        private int $numSala;

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of numSala
         */
        public function getNumSala(): int
        {
                return $this->numSala;
        }

        /**
         * Set the value of numSala
         */
        public function setNumSala(int $numSala): self
        {
                $this->numSala = $numSala;

                return $this;
        }

        public function __toString()
        {
            return sprintf("Departamento: %s\nSala: %d\n", $this->nome, $this->numSala);
        }
    }