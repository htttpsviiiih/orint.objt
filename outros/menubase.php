<?php 
 do {
    echo "\n-----------MENU-----------\n";
    echo "1- Adicionar receita\n";
    echo "2- Adicionar dispesa\n";
    echo "3- Listar receitas\n";
    echo "4- Listar dispesas\n";
    echo "5- Sumarizar\n"; 
    echo "0- SAIR\n";
    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");

    switch ($opcao) {
        case 0:
            echo "Fim do programa\n";
            break;
        case 1:
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 1:
            break;

        default:
            echo "Opção INVÁLIDA!\n";
            break;
    }
} while ($opcao != 0);