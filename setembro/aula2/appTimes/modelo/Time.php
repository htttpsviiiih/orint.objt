<?php 

    class Time{
        private string $nome;
        private string $cidade;
        private array $jogador;

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
         * Get the value of cidade
         */
        public function getCidade(): string
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         */
        public function setCidade(string $cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }
        /**
         * Set the value of jogador
         */
        public function setJogador(array $jogador): self
        {
                $this->jogador = $jogador;

                return $this;
        }

        /**
         * Get the value of jogador
         */
        public function getJogador(): array
        {
                return $this->jogador;
        }
    } 