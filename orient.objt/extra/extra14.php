<?php

    $num = readline("Digite um número: ");
    $num2 = readline("Digite o segundo número: ");

    $soma = $num + $num2;

    if ($soma > 20) {
        $soma = $soma + 8;
            print $soma. " ";
    }elseif($soma < 20){
        $soma = $soma - 5;
        print $soma. " ";
    }