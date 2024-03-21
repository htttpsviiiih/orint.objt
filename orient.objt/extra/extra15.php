<?php

$num = readline("Digite um número: ");

if($num % 10 == 0){
    echo $num. " é divisivel por 10 ";
}elseif($num  % 5 == 0){
    echo $num. " é divisivel por 5 ";
}elseif($num  % 2 == 0){
    echo $num. " é divisivel por 5 ";
}else {
    echo $num. " não é divisivel por nenhum desses números"; 
}