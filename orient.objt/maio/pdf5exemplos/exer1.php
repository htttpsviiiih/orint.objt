<?php

class Pessoa
{
    //Atributos
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    //metodo
    function falarOla()
    {
        echo "Olá mundo, sou " . $this->nome . "\n";
    }
    function falarEndereco()
    {
        echo "Moro em " . $this->endereco . " " . $this->cidade . "/" . $this->uf . "\n";
    }
    function falarAltura()
    {
        echo "Tenho " . $this->altura . " \n";
    }
}
// programa principal 
$pessoa1 = new Pessoa();
$pessoa1->nome = readline("Escreva seu nome: ");
$pessoa1->endereco = readline("Escreva seu endereço: ");
$pessoa1->cidade = readline("Escreva sua cidade: ");
$pessoa1->uf = readline("Escreva seu UF: ");
$pessoa1->altura = readline("Escreva sua altura: ");
$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();
