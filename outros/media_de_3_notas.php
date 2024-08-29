<?php

    $nota1 = readline(" Qual foi sua nota em matemática no primeiro trimestre? \n");
    $nota2 = readline( "E no segundo? \n" );
    $nota3 = readline( "E por fim, qual foi a nota do terceiro? \n" );

    $media = ($nota1 + $nota2 + $nota3)/3;
   
                                               //round foi usado para arredondar para cima
    echo 'sua media em matemática esse ano foi '.round($media).''; 