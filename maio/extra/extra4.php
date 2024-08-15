<?php //Soma do quadrado de dois números

    $num1 = readline("Digite um número\n");
    $num2 = readline("Digite outro número\n");
    $quadrado1 = $num1 * $num1 ;
    $quadrado2 = $num2 * $num2;

    $soma = $quadrado1 + $quadrado2;

    print " A soma dos quadrados é ".$soma;