<?php // +16% e parcelado em 10 vezes
$num = readline("Qual o valor do produto? R$\n");
$desc = 16;
$valorapagar = $num + ($num/100*$desc);
$valordaparcela = $valorapagar/10;

    print "Você recebeu um acrescimo de ".$desc."% por estar com o nome sujo\nPodemos dividir a conta em 10 parcelas, que ficarão no valor de R$".round($valordaparcela,2)." totalizando R$".$valorapagar;
