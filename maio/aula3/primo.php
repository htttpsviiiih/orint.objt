<?php
function primo($num){
    if ($num < 2) {
        return "O número não é primo\n";
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return "O número não é primo\n";
        }
    }
    return "O número é primo\n";
}
$num = 3;

while($num > 2){
    $num = readline("Digite um número para fazer a verificação: \n");
    echo primo($num);
}


