<?php
    
    function media ( $a,$b,$c){
       $media = ( ($a * 3) + ($b * 5) + ($c * 2) ) / 10;
       return $media;
    }

    $a = readline ("Informe um número: ");
    $b = readline ("Informe outro número: ");
    $c = readline ("Informe outro número: ");
    if($a != 0 && $b != 0 && $c != 0 && $a != "" && $b != "" && $c != ""){
        echo "A média entre esses números é : ".media($a,$b,$c)."\n";
    }else{
        echo "Você escreveu algo que não era um número, ou deu todas as respostas como 0";
    }
    