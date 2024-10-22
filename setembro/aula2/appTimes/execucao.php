<?php 

require_once("modelo/Time.php"); //definir ligação do arquivo executador com os arquivos(classes) que vão ser executadas
require_once("modelo/Jogador.php");
//1- criar objeto time 

$time = new Time;
$time ->setNome("Gremio");
$time ->setCidade("Porto Alegre");



$jogador1 = new Jogador;
$jogador1->setNome("Soarez");
$jogador1->setNumero(9);
$jogador1->setTime($time);
$jogador2 = new Jogador;
$jogador2->setNome("Geronimo");
$jogador2->setNumero(4);
$jogador2->setTime($time);


$jogador = array();
array_push($jogador, $jogador1);
array_push($jogador, $jogador2);
$time->setJogador($jogador);
print_r($jogador);






