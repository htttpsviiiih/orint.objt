<?php 
        $anos = readline(" a quanto tempo você fuma? ") ;
       
        $cigarros = 10 ;

        $perda_de_vida = 11 ;

        $cigarros_total = $cigarros  *  365 * $anos  ;

        $tempo_perdido_fumando = $cigarros_total * $perda_de_vida ;

        $dias_perdidos = floor( $tempo_perdido_fumando / 60 /24 ) ;

        print " Você perderá $dias_perdidos dias de vida!\n " ;