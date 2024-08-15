<?php
function soma($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}

function media($num1, $num2, $num3) {
    $soma = soma($num1, $num2, $num3);
    return $soma / 3;
}

// Testando as funções
$num1 = 10;
$num2 = 20;
$num3 = 30;

echo "A soma dos três números é: " . soma($num1, $num2, $num3) . "\n";
echo "A média dos três números é: " . media($num1, $num2, $num3) . "\n";

