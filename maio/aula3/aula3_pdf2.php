<?php
function area($pi, $raio){
    $area = $pi * $raio * $raio;
    return $area;
}

function circunferencia($pi = 3.14, $raio){
    $circunferencia = 2 * $pi * $raio;
    return $circunferencia;
}

$raio = readline("Digite o raio do círculo: ");
echo "A área desse círculo é " . round (area(3.14, $raio),2) . "\n";
$circunferencia = readline("Agora vamos descobrir a circunferência, digite o valor do raio novamente: ");
echo "A circunferência desse círculo é " . round (circunferencia(3.14, $raio),2) . "\n";
