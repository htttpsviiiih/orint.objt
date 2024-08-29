<?php //desconto de 9%
$num = readline(" Qual valor da peça de roupa?\n");
$desc = $num - ($num/100*9);

    print " Você recebeu um desconto de 9% por pagar a vista, o valor a pagar é: " .$desc;