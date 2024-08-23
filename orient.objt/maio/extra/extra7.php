<?php //desconto de 7%
$num = readline(" Qual valor da peça de roupa?\n");
$desc = 7;
$valorapagar = $num - ($num/100*$desc);

    print "Você recebeu um desconto de ". $desc. "% por pagar sua compra a vista. \nO valor anterior era R$".$num." e o valor a pagar com o desconto é R$".$valorapagar.".";