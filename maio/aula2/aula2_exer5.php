<?php
$numero1 = readline("Digite o primeiro número(menor): ");
$numero2 = readline("Digite o segundo número(maior): ");

for ($i = $numero1 = $numero1 +1; $i < $numero2; $i++) {
    if ($i % 5 == 0) 
        echo $i . "\n";
}
            