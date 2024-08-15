<?php
function fatorial($num) {
    $resultado = 1;
    for ($i = 2; $i <= $num; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

$num = readline("Digite um número\n");
while ($num != 0) {
    echo "O fatorial de " . $num . " é " . fatorial($num) . "\n";
    $num = readline("Digite outro número (ou 0 para sair)\n");
}

