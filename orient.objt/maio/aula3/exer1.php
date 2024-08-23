<?php
function fdx($x){
    $y = (5*$x) + (2*$x) + 3;
    return $y;
}
// principal
for ($i=0; $i <4 ; $i++) { 
    $y = readline("Escreva o valor de x: ");
    echo " y é igual a: " . fdx($y) . "\n";
}