<?php

$texto = "A beleza dela é encantadora";

escreva_devagar($texto);

function escreva_devagar($texto)
{
    $velocidade = 2;
    $j = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        if ($i > 0) {
            $letra_menos = $texto[$i - 1];
            if ($j == 149 || $letra == '[') {
                echo "\n";
                $j = 0;
            }
            if ($letra_menos == "\n") {
                $j = 0;
            }
        }
        echo $letra;
        $j++;

        switch ($letra) {
            case ' ':
                usleep(0);
                break;
            case ',':
            case ':':
            case ';':
                usleep($velocidade * 5);
                break;
            case '.':
            case '!':
            case '?':
                usleep($velocidade * 5);
                break;
            default:
                usleep($velocidade);
                break;
        }
    }
}
