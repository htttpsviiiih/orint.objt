<?php
$pares = 0;
$impares = 0;

for ($i = 0; $i < 10; $i++) {
    $numero = readline("Digite um número: ");
    
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Quantidade de números pares: " . $pares . "\n";
echo "Quantidade de números ímpares: " . $impares . "\n";
