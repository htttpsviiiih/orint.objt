<?php
    require_once("modelo/Comercial.php");
    require_once("modelo/Industrial.php");
    require_once("modelo/Residencial.php");

    do {
  
        echo "===============================\n";
        echo "=           MENU PRINCIPAL    =\n";
        echo "===============================\n";
        echo "= 1. Consumo Residencial    ===\n";
        echo "= 2. Consumo Comercial      ===\n";
        echo "= 3. Consumo Industrial     ===\n";
        echo "= 0. Sair                   ===\n";
        echo "===============================\n";
        echo "Escolha uma opção: ";
        
    
        $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");
        
    
        switch ($opcao) {
            case 0:
                echo "VOCÊ CANCELOU O PROGRAMA! \n";
                break;
            case 1:
                    $consumo = new Residencial();
                    $consumo->setConsumoDiario(readline("Informe quantos KWh você consumiu: "));
                    echo"Você gasta diariamente R$ ". $consumo->getValorFatura()." \n";
    
                break;
            case 2:
                    $consumo = new Comercial();
                    $consumo->setConsumoComercial(readline("Informe quantos KWh você consumiu: "));
                    echo"Você gasta diariamente R$ ". $consumo->getValorFatura()." \n";
    
                break;
            case 3:
                $consumo = new Industrial();
                $consumo->setConsumoDiario(readline("Informe quantos KWh você consumiu: "));
                echo"Você gasta diariamente R$ ".$consumo->getValorFatura()." \n";
                break;
            default:
                echo "*** Opção inválida! Por favor, tente novamente. ***\n";
                break;
        }
    
    } while ($opcao);
    