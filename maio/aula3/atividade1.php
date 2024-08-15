<?php

function soma(int $numero1, int $numero2 = 4) :int {
    $soma = $numero1 + $numero2;
    // echo $soma."\n";
    return $soma;
}
    echo soma(5)."\n";
    echo soma(89,5)."\n";
    echo soma(90,17)."\n";
    echo soma(3,6)."\n"; 