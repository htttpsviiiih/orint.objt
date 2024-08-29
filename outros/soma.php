<?php
        //com função

    $numero1 = readline( "Digite um número\n" );

    $numero2 = readline( "Digite outro número\n" );

    soma_dos_numeros($numero1,$numero2);

    function soma_dos_numeros($numero1, $numero2) 
    {
        $soma = $numero1 + $numero2;

        echo $soma;

    } ?>

    <?php

            //sem função

            $numero1 = readline( "Digite um número" );

            $numero2 = readline( "Digite outro número" );

            $soma = $numero1 + $numero2;

            echo $soma;


