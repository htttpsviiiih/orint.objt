<?php 

class Prato{
    private int $numero;
    private float $valor;
    private string $nome;

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

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
    public function __construct(int $num,  string $nom, float $val,){
        $this->numero = $num;
        $this->valor = $val;
        $this->nome = $nom;
    }
    public function __toString(){
        return "Numero: ". $this->getNumero(). " Nome: ". $this->getNome(). " Valor:R$ ". $this->getValor();
    }
}
