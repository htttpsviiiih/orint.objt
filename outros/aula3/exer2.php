<?php
function area ($h,$b){
    $a = $h * $b;
    return $a;
}
function perimetro($l1,$l2){                        /*Em um retângulo, as bases são sempre iguais entre si,
                                                     e as alturas também são sempre iguais entre si. Portanto, 
                                                    um retângulo tem dois lados de um comprimento (as bases) e 
                                                    dois lados de outro comprimento (as alturas). Por isso pedi
                                                    apenas a base e a altura para calcular o perímetro*/
    $p = $l1 + $l1 + $l2 + $l2;
    return $p; 
}
for ($i=0; $i < 3; $i++) { 
    echo "\n";
    $b = readline("Digite o valor da base: ");
    $h = readline("Digite a altura do retângulo: ");
        if($b != $h) {
            echo "A área do retângulo é: ".area($h,$b)."cm \n";
        }elseif ($b == 0 || $h == 0) {
            echo "Nenhum valor pode ser igual a zero.";
            break;
        }elseif($b == $h){
            echo "Acho que rolou uma confusão, a base e a altura tem que ser diferentes para a figura ser um retângulo.\n";
            break;                
        }
    echo "Agora vamos calcular o perímetro de um retângulo, pode ser com outras medidas, ou com as do anterior!\n";
    $l1 = readline("Digite o valor das bases: "); 
    $l2 = readline("Digite o valor das alturas: ");   
    if ($l1 != $l2) {
        echo "O perimetro do retângulo é: ".perimetro($l1,$l2)."cm";
    } elseif($l1 == $l2){
        echo "O valor das alturas não podem ser iguais os da base";
        break;
    }elseif($li == 0 || $l2 == 0){
        echo "Nenhum dos valores pode ser igual a zero";
        break;
    }
}