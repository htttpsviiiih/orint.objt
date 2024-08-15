<?php

class Monitor
{

    //atributos da classe
    public $cor;
    public $resolucao;
    public $marca;

    // Método
    function ligar()
    {
        echo "O computador esta ligado!\n";
    }
    function desligar()
    {
        echo "O computador está desligado!\n";
    }
    function mostrarImagem()
    {
        echo "O computador está mostrando imagen com a resolução de " 
        . $this -> resolucao ."\n";
    }
}
//Programa Principal 
$monitor1 = new Monitor();
$monitor1-> cor =readline("Qual a cor? ");
$monitor1-> resolucao = "1800x1420";
$monitor1-> marca = "ADC";
$monitor1-> ligar();
$monitor1-> mostrarImagem();
$monitor1-> desligar();

$monitor2 = new Monitor();
$monitor2-> cor = readline("Qual a cor? ");
$monitor2-> resolucao = "1366x768";
$monitor2-> marca = "DELL";
$monitor2-> ligar();
$monitor2-> mostrarImagem();
$monitor2-> desligar();
echo "Cor do monitor 1: ". $monitor1 -> cor. "\n"; 
echo "Cor do monitor 2: ". $monitor2 -> cor. "\n"; 
