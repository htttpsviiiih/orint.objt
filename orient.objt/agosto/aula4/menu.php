<?php

$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Inserir\n";
    echo "2- Listar\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            echo "Inserindo....\n";
            break;
        case 2:
            echo "Listando....\n";
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
