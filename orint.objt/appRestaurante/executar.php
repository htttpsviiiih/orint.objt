<?php 

    require_once('modelo/Pedido.php');
    require_once('modelo/Prato.php');


    function busca($cardapio, $resp) {
        foreach ($cardapio as $value) {
            if ($value->getNumero() === $resp) {
                return $value; 
            }
        }
        return null; 
    }
    function buscaPedidoPorPrato($pedidos, $numeroPrato) {
        foreach ($pedidos as $pedido) {
            if ($pedido->getPrato()->getNumero() === $numeroPrato) {
                return $pedido;
            }
        }
        return null;
    }
    


$cardapio = array(
     new Prato(1, "Camarão à Milanesa", 110.00 ),
     new Prato(2, "Pizza Margherita", 80.00 ),
     new Prato(3, "Macarrão à Carbonara ", 60.00 ),
     new Prato(4, "Bife à Parmegiana", 75.00 ),
     new Prato(5, "Risoto ao Funghi ", 70.00 )
);

function imprimirCardapio($cardapio) {
    echo "----------- Cardapio -----------\n";
    foreach ($cardapio as $card) {
        echo $card . "\n";
    }
} 

do {
    echo "\n------------------- MENU -------------------\n";
    echo "1 - Cadastrar---------------------------------\n";
    echo "2 - Cancelar----------------------------------\n";
    echo "3 - Listar------------------------------------\n";
    echo "4 - Total de Vendas---------------------------\n"; 
    echo "0 - Sair--------------------------------------\n";        
    echo "----------------------------------------------\n";

        $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");

        switch($opcao){
            case 0:
                echo "VOCÊ CANCELOU O PROGRAMA! \n";
                break;

            case 1:
                $pedido = new Pedido();

                echo "------------------ CADASTRO DE PEDIDOS ------------------\n";

                $pedido->setNomeCliente(readline("Digite o nome do cliente: "));
                echo"----------------------------------------------------------\n";
                $pedido->setNomeGarcom(readline("Digite o nome do garçom: "));
                echo"----------------------------------------------------------\n";
                system("clear");
                imprimirCardapio($cardapio);
                echo"----------------------------------------------------------\n";
                $resp = (int)readline("Escolha o número do prato: ");
                echo"----------------------------------------------------------\n";
                $prato = busca($cardapio, $resp);
                
                if ($prato) {
                    $pedido->setPrato($prato);
                    $pedidos[] = $pedido;
                    echo "Pedido cadastrado com sucesso!\n";
                    system("clear");
                } else {
                    echo "Prato não encontrado. Tente novamente.\n";
                    system("clear");
                }

                break;
            case 2:
                $numeroPrato = (int)readline("Digite o número do pedido a ser cancelado: ");
                $pedidoCancelado = buscaPedidoPorPrato($pedidos, $numeroPrato);
                
                if ($pedidoCancelado) {
                    // Remove o pedido do array
                    $pedidos = array_filter($pedidos, function($pedido) use ($numeroPrato) {
                        return $pedido->getPrato()->getNumero() !== $numeroPrato;
                    });
                    echo "Pedido cancelado com sucesso.\n";
                    system("clear");
                } else {
                    echo "Pedido com esse número de prato não encontrado.\n";
                    system("clear");
                }
                break;
            case 3:
                if (empty($pedidos)) {
                    echo "Não há pedidos cadastrados.\n";
                    system("clear");
                    break;
                }
                foreach ($pedidos as $chave => $pedido) {
                    $numeroCliente = $chave + 1; // Faz a soma antes
                    echo "{$numeroCliente}° cliente: {$pedido->getNomeCliente()} foi atendido(a) pelo garçom {$pedido->getNomeGarcom()}, pediu um prato de {$pedido->getPrato()->getNome()} no valor de R$ {$pedido->getPrato()->getValor()}.\n";
                    system("clear");
                }                
                break;

                case 4:
                    $totalVendas = 0;
                    foreach ($pedidos as $pedido) {
                        $totalVendas += $pedido->getPrato()->getValor();
                    }
                    echo "Total de vendas: R$ {$totalVendas}\n";
                    
                    break;
        
                default:
                    echo "Opção inválida! Tente novamente.\n";
                    system("clear");
                    break;
        }







} while ($opcao);