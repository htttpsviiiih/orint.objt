<?php

class Pessoa
{
        private $nome;
        private $endereco;
        private $cidade;
        private $uf;
        private $altura;

        //metodos
        public function setNome($nome)
        {
                $this->nome = $nome;
        }
        public function getNome()
        {
                return $this->nome;
        }
        public function getEndereco()
        {
                return $this->endereco;
        }
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }
        public function getCidade()
        {
                return $this->cidade;
        }
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }
        public function getUf()
        {
                return $this->uf;
        }
        public function setUf($uf): self
        {
                $this->uf = $uf;

                return $this;
        }
        public function getAltura()
        {
                return $this->altura;
        }
        public function setAltura($altura): self
        {
                $this->altura = $altura;
                return $this;
        }
        public function getApresentacao()
        {
                echo "Ola mundo, meu nome é " . $this->getNome() . " resido no endereço " . $this->getEndereco() . ", cidade " . $this->getCidade() . "-" . $this->getUf() . " e minha altura é " . $this->getAltura() . "\n";
        }

}
echo "================================================================================\n";
$pessoa1 = new Pessoa();
$nome = readline("Digite seu nome: ");
$pessoa1->setNome($nome);
echo "---------------------------------------------------------------------------------\n";
$endereco = readline("Digite seu endereço: ");
$pessoa1->setEndereco($endereco);
echo "---------------------------------------------------------------------------------\n";
$cidade = readline("Digite sua cidade: ");
$pessoa1->setUF($cidade);
echo "---------------------------------------------------------------------------------\n";
$UF = readline("Digite seu UF: ");
$pessoa1->setUF($UF);
echo "---------------------------------------------------------------------------------\n";
$altura = readline("Digite sua Altura: ");
$pessoa1->setAltura($altura);
echo "---------------------------------------------------------------------------------\n";
echo $pessoa1->getApresentacao();
echo "================================================================================\n";
$pessoa2 = new Pessoa();
$nome = readline("Digite seu nome: ");
$pessoa2->setNome($nome);
echo "---------------------------------------------------------------------------------\n";
$endereco = readline("Digite seu endereço: ");
$pessoa2->setEndereco($endereco);
echo "---------------------------------------------------------------------------------\n";
$cidade = readline("Digite sua cidade: ");
$pessoa2->setUF($cidade);
echo "---------------------------------------------------------------------------------\n";
$UF = readline("Digite seu UF: ");
$pessoa2->setUF($UF);
echo "---------------------------------------------------------------------------------\n";
$altura = readline("Digite sua Altura: ");
$pessoa2->setAltura($altura);
echo "---------------------------------------------------------------------------------\n";
echo $pessoa2->getApresentacao();
echo "================================================================================\n";