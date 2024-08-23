<?php
$valor_final = 0;
$valor = readline("Deposite seu dinheiro\n");

while($valor != 0){
    $valor_final += $valor;
    $valor = readline("Deposite seu dinheiro\n");
}

print "A turma arrecador R$".$valor_final . " para realizar a confraternização\n";

