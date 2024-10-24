<?php
do {
  
    echo "===============================\n";
    echo "=           MENU PRINCIPAL    =\n";
    echo "===============================\n";
    echo "= 1. Inserir uma nova pessoa===\n";
    echo "= 2. Listar todas as pessoas===\n";
    echo "= 3. Sair-------------------===\n";
    echo "===============================\n";
    echo "Escolha uma opção: ";
    

    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");
    

    switch ($opcao) {
        case 0:
            echo "VOCÊ CANCELOU O PROGRAMA! \n";
            break;
        case 1:
            echo ">>> Inserir uma nova pessoa <<<\n";

            break;
        case 2:
            echo ">>> Lista de pessoas cadastradas <<<\n";

            break;
        case 3:
            echo ">>> Saindo do programa. Até logo! <<<\n";
            break;
        default:
            echo "*** Opção inválida! Por favor, tente novamente. ***\n";
            break;
    }

} while ($opcao);
