<?php

class Pessoa {
    private string $nome;
    private int $idade;
    private string $sobrenome;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function __toString() {
        return sprintf("%s %s, %d anos", $this->nome, $this->sobrenome, $this->idade);
    }
}

$cadastro = array();

$a = readline("Prima um número maior que 0, ou um caracter diferente de (N) caso queira fazer cadastro: ");
while ($a != "0" && $a != "N") {
    $pessoa = new Pessoa();
    echo "================================_CADASTRO_==================================== \n";
    $nome = readline("Digite seu nome, por favor: ");
    $pessoa->setNome($nome);
    
    echo "-----------------------------------------------------------------------------\n";
    $sobrenome = readline("Digite seu sobrenome, por favor: ");
    $pessoa->setSobrenome($sobrenome);
    
    echo "-----------------------------------------------------------------------------\n";
    $idade = readline("Digite sua idade, por favor: ");
    $pessoa->setIdade($idade);
    
    echo "--------------------------------------------------------------------------------------------------------------\n";
    echo $pessoa . "\n";
    array_push($cadastro, $pessoa);
    echo "--------------------------------------------------------------------------------------------------------------\n";
    $a = readline("Prima um número maior que 0, ou um caracter diferente de (N) caso queira fazer outro cadastro: ");
}
    echo "====================================_TODOS OS CADASTROS_=======================================================\n";
    foreach ($cadastro as $cad) {
        printf("Nome: %s | Sobrenome: %s | Idade: %d\n", 
               $cad->getNome(), 
               $cad->getSobrenome(), 
               $cad->getIdade());
    }

echo "Cadastro finalizado\n";
