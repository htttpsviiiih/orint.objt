<?php

    $horas = readline(" Quantas horas você trabalha por dia? \n");

    $diaspormes = readline( " Quantas vezes ao mês? \n" );

    $recebe = readline( " Quanto você recebe por hora? \n" );

    $salario = $diaspormes * $horas;

    $salarioTotal = $salario * $recebe;

    print "Você recebe ".$salarioTotal." por mês\n" ;