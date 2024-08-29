<?php

function ehPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Vetor para armazenar os números primos
$primos = [];

// Leitura dos números até que o usuário digite 0
while (true) {
    echo "Digite um número (ou 0 para sair): ";
    $entrada = readline();
    $numero = intval($entrada);

    if ($numero == 0) {
        break;
    }

    if (ehPrimo($numero)) {
        $primos[] = $numero;
    }
}

// Imprime a lista de números primos
echo "Números primos lidos: ";
foreach ($primos as $primo) {
    echo "$primo ";
}
echo "\n";
