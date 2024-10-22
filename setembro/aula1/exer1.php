<?php

class Prato{
    private string $descricao;
    private int $quantidade;
    private float $valor_unitario;

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * Get the value of valor_unitario
     */
    public function getValorUnitario(): float
    {
        return $this->valor_unitario;
    }

    /**
     * Set the value of valor_unitario
     */
    public function setValorUnitario(float $valor_unitario): self
    {
        $this->valor_unitario = $valor_unitario;
        return $this;
    }

    ///valor total
    public function getValorTotal(): float
    {
        return $this->valor_unitario * $this->quantidade;
    }
}

$total = array();
for ($i = 1; $i < 4; $i++) { 
    $prato = new Prato();
    echo "\n-----------------------------------------\n";
    echo "Prato: ".$i."\n";
    $descricao = readline("O que você vai levar? ");
    $prato->setDescricao($descricao);
    $quantidade = readline("Quantas unidades você vai levar? ");
    $prato->setQuantidade((int)$quantidade);
    $valorUnitario = readline("Qual preço unitário do seu prato? ");
    $prato->setValorUnitario((float)$valorUnitario);
    array_push($total, $prato);
}

$somaJanta = 0;
foreach ($total as $t) {
    echo "\n--------------------JANTA---------------------\n";
    $descricao = $t->getDescricao();
    $quantidade = $t->getQuantidade();
    $valorUnitario = $t->getValorUnitario();
    $valorTotal = $t->getValorTotal();
    
    echo "Prato: $descricao\n";
    echo "Quantidade: $quantidade\n";
    echo "Valor Unitário: R$ $valorUnitario\n";
    echo "Subtotal: R$ $valorTotal\n";
    echo "\n------------------------------------------------\n";

    $somaJanta += $valorTotal;
}

    echo "O valor da Janta foi: R$ " . $somaJanta;
