<?php //             Tabuada de qualquer número

    $multiplicado = readline( " Digite um número, por favor. " ); //entrada de dados 

  for( $i = 0; $i <= 10; $i++ ) //estrutura de repetição 
  {
    print " [ $multiplicado ] X [ $i ] = " .( $multiplicado* $i ). "\n";
  } //fim do for
