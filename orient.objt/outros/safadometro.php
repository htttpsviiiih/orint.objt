<?php 
    
    
    
    safadometro() ;

    function safadometro (  )

    { 
        print " em que dia vc nasceu?\n ";

        $dia = readline();

        print " qual o digito correspondente ao mes que vc nasceu?\n ";

        $mes = readline();

        print " Quais os ultimos dois digitos do ano em que vc nasceu?\n ";

        $ano = readline(); 

        $safadeza = somatorio( $mes ) - ( $ano/100 )*( 50-$dia ) ;
        
        $anjo = 100 - $safadeza ;

    }