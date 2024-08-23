<?php //Covertor de (m/s) pra (km/h)
$num = readline("Qual a velocidade do objeto (m/s)?\n");

$km = $num * 3.6;

print "O objeto está a ".$km. "km por hora";