<?php

class Calculadora {
    private $numA;
    private $numB;

    public function getNumA() {
        return $this->numA;
    }

    public function setNumA($numA): self {
        $this->numA = floatval($numA);
        return $this;
    }

    public function getNumB() {
        return $this->numB;
    }

    public function setNumB($numB): self {
        $this->numB = floatval($numB);
        return $this;
    }

    ////////////Métodos/////////////////

    public function fazerSoma() {
        $soma = $this->numA + $this->numB;
        return round($soma, 2);
    }

    public function fazerSubtracao() {
        $subtracao = $this->numA - $this->numB;
        return round($subtracao, 2);
    }

    public function fazerDivisao() {
        if ($this->numB != 0) {
            $divisao = $this->numA / $this->numB;
            return round($divisao, 2);
        } else {
            return "Erro: Divisão por zero";
        }
    }

    public function imprimirResto() {
        if ($this->numB != 0) {
            $resto = fmod($this->numA, $this->numB);
            echo "Resto = " . round($resto, 2) . "\n";
            return round($resto, 2);
        } else {
            echo "Erro: Divisão por zero\n";
            return null;
        }
    }

    public function fazerMult() {
        $mult = $this->numA * $this->numB;
        return round($mult, 2);
    }

    public function imprimirNumerosLidos() {
        echo "Números lidos: " . $this->numA . " | " . $this->numB . "\n";
    }
}

for ($i = 1; $i < 4; $i++) {
    $calculo = new Calculadora();
    $numA = readline("Digite o primeiro número: ");
    $calculo->setNumA($numA);
    $numB = readline("Digite o segundo número: ");
    $calculo->setNumB($numB);

    $calculo->imprimirNumerosLidos();
    echo "Soma: " . $calculo->fazerSoma() . "\n";
    echo "Subtração: " . $calculo->fazerSubtracao() . "\n";
    echo "Divisão: " . $calculo->fazerDivisao() . "\n";
    $calculo->imprimirResto();
    echo "Multiplicação: " . $calculo->fazerMult() . "\n";
}
