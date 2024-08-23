<?php
$num1 = readline("Digite um número: \n");
$num2 = readline("Digite outro número: \n");
$resultado = 0;

for ($i= 0; $i < $num1 ; $i++) { 
    $resultado += $num2;
}
    echo $resultado."\n";