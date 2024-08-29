<?php

        $suspeito= 0;
        

        $resposta = [ ];

        $resposta[] = readline("devia para a vítima?\n");
      
        $resposta[] = readline("Já trabalhou com a vítima?\n");

        $resposta[] = readline("Telefonou para vítima?\n");

        $resposta[] = readline("Esteve no local do crime?\n");

        $resposta[] = readline("mora perto da vitíma?\n");

        foreach ($resposta as $resp) 
        {
           if($resp == "sim")
           {
            $suspeito++;
           }

        }


         if($suspeito == 0) 
         { 
            print "Você foi declarado como inocente\n";
         }
         elseif($suspeito <=2)
         {
            print "Você é considerado suspeito\n";
         }
         elseif($suspeito ==3)
         {
            print "Você é considerado cúmplice\n";
         }
         elseif($suspeito >= 4)
         {
            print "Culpado\n";
         }
         
         
