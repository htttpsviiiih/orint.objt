<?php 

    $numeros = [];

   

    for ($i=0; $i < 5; $i++) 
    { 
      $numero_informado = readline("Informe um número para a posição $1: ");
      $numero[] = $numero_informado;
        
    }

    sort($numeros);

    foreach ($numeros as $n) 
    {
        print "$numeros\n";

    }
   
