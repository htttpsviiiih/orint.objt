<?php
$num1 = readline("Digite um número\n");
$num2 = readline("Digite um número\n");
$num3 = readline("Digite um número\n");

    if ($num1 > $num2 && $num1 > $num3) {
        print "O maior número é: ".$num1."\n";
    }elseif($num2 > $num1 && $num2 >$num3){
        print "O maior número é: ".$num2."\n";
    }else
        print "O maior número é: ".$num3."\n";