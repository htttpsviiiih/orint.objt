<?php
function vetor1($fahrenheit)
{
    $celsius = ($fahrenheit - 32) * 5 / 9;
    return $celsius;
}
function vetor2($numero)
{
    if ($numero >= 1) {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    } else {
        return 0;
    }
}
function vetor3($x){
    // F(X) = X^2 + 2X + 4X/2X
    $num = (($x*$x) +(2*$x)+ 4*$x) / (2*$x);
    return $num;
}
function lendovetores($vet1, $vet2, $vet3)
{
    $vetorMaior = array_merge($vet1, $vet2, $vet3);
    return implode(', ', $vetorMaior);
}
// Cria um vetor para armazenar os números
$numeros = [];
$vet1 = [];
$vet2 = [];
$vet3 = [];
// Solicita ao usuário para inserir 5 números
for ($i = 0; $i < 5; $i++) {
    echo "Digite um número: ";
    $numero = floatval(readline()); // Lê o número digitado pelo usuário
    $numeros[] = $numero; // Adiciona o número ao vetor
}
foreach ($numeros as $num) {
    $vet1[] = round(vetor1($num), 2);
}
foreach ($numeros as $num) {
    $vet2[] = round(vetor2($num), 2);
}
foreach ($numeros as $num) {
    $vet3[] =  vetor3($num);
}
$vetorMaior = lendovetores($vet1, $vet2, $vet3);
echo "Elementos dos três vetores: ". $vetorMaior;