<?php
    $num1 = readline("Digite um número: ");
    $num2 = readline("Digite outro número: ");

    $soma = $num1 + $num2;

    if ($soma >20) {
        $soma + 8;
        print "A soma desses dois números ultrapassou 20, por isso somamos mais 8 resultando em:\n".$soma;
    } elseif($soma < 20){
        $soma -5;
        print "A soma desses dois números resultou em um número menor que vinte, por isso subtraímos 5:\n".$soma;
    }elseif($soma = 20){
        $soma -5;
        print "A soma desses dois números é igual a 20, por isso subtraímos 5: \n".$soma;
    }
