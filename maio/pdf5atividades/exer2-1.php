<?php

class Pokemon {
    //Atributos: características
    public $nome;
    public $tipo;
    
    //public $ataque;
    //public $defesa;
    //public $velocidade;

    public $nivel;
    public $pontosVida;
    public $experiencia;

    //Construtor
    function __construct() {
        $this->nivel = 1;
        $this->pontosVida = 10;
        $this->experiencia = 0;
    }

    //Métodos: ações
    function batalhar() {
        $this->aumentarExperiencia(5);        
    }

    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }

    function aumentarPontosVida() {
        $this->pontosVida = $this->nivel * 10;
    }

    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        if($this->experiencia >= 100)
            $this->aumentarNivel();
    }
    function imprimirDados(){
        $retorno = "Nome: " . $this -> nome."\n";
        $retorno = $retorno . "Tipo: " .$this -> tipo."\n";
        $retorno = $retorno ."Nivel: " .$this -> nivel."\n";
        $retorno = $retorno ."Experiencia: " .$this -> experiencia. "\n";
        $retorno = $retorno ."Pontos de Vida: " .$this -> pontosVida. "\n";
        return $retorno;
    }



}//FINAL classe Pokemon


//Programa principal
$psyduck = new Pokemon();
$psyduck->nome = "Psyduck";
$psyduck->tipo = "Aquático";
for ($i=1; $i <23 ; $i++) { 
    $psyduck ->  batalhar();
    echo"\n==============================================================\n";
    echo "\n".$i."°- Batalha \n";
    //echo "Nome: ".$psyduck -> nome."\nTipo: ".$psyduck ->tipo." \n";
    echo $psyduck -> imprimirDados();
}
$lucario = new Pokemon();
$lucario->nome = "Lucario";
$lucario->tipo = "Lutador";
for ($i=1; $i <23 ; $i++) { 
    $lucario ->  batalhar();
    echo"\n==============================================================\n";
    echo "\n".$i."°- Batalha \n";
    echo $lucario -> imprimirDados();
}

