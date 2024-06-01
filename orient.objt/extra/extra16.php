<?php 

$num = readline("Digite quantos hectares de terra você tem: ");

$hectare = $num * 10.000;

$tranfalqueire = $hectare / 24.200;

echo "Você tem ". round($tranfalqueire,0)." alqueires de terra \n"; 