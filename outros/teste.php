<?php

echo "              ############################ \n";
echo "              #           JOGOS          # \n";
echo "              ############################ \n";
echo "              #        -MEGA-SENA        # \n";
echo "              ############################ \n";
echo "              #        -LOTOFÁCIL        # \n";
echo "              ############################ \n";
echo "              #          -QUINA          # \n";
echo "              ############################ \n";
echo "              #        -LOTOMANIA        # \n";
echo "              ############################ \n";

echo "Para começar apostar você precisa depositar dinheiro\n";
sleep(3);

$saldo = readline("Quanto dinheiro você deseja depositar? ");


while (true) {
    $jogo = readline("Escolha o jogo (Mega-Sena, Lotofácil, Quina e Lotomania) ou digite 'Sair' para encerrar: ");

    if ($jogo == 'Sair') {
        break;
    }

    while ($jogo != "Mega-Sena" && $jogo != "Lotofácil" && $jogo != "Quina" && $jogo != "Lotomania") {
        echo "Informe um jogo válido\n";
        $jogo = readline("Escolha o jogo (Mega-Sena, Lotofácil, Quina e Lotomania): ");
    }

    $numapostas = readline("Quantas apostas você deseja: ");

    while ($numapostas <= 0) {
        echo "Informe um valor acima de zero\n";
        $numapostas = readline("Quantas apostas você deseja: ");
    }

    $numdezenas = readline("Números de dezenas desejadas: ");

    while ($numdezenas < 6 || $numdezenas > 20) {
        echo "Informe uma quantidade de dezenas entre 6 e 20\n";
        $numdezenas = readline("Números de dezenas desejadas: ");
    }

    if ($jogo == "Mega-Sena") {
        $valor_mega_sena = 4.50;
        
        $valor_total = $valor_mega_sena * $numapostas;

    } elseif ($jogo == "Lotofácil") {
        $valor_lotofacil = 2.50;

        $valor_total = $valor_lotofacil * $numapostas;

    } elseif ($jogo == "Lotomania") {
        $valor_lotomania = 2.50;

        $valor_total = $valor_lotomania * $numapostas;

    } elseif ($jogo == "Quina") {
        $valor_Quina = 2.00;

        $valor_total = $valor_Quina * $numapostas;
        
    }

    if ($saldo < $valor_total) {
        echo "Saldo insuficiente. Adicione crédito para continuar jogando.\n";
        sleep(1);
        $saldo = readline("Qual valor que você deseja depositar? ");
    } else {
       
        for ($i = 0; $i < $numapostas; $i++) {
            $posicao = $i + 1;
            echo "\n" . $posicao . "° Sorteio: ";

            $sorteios = array();

            while (count($sorteios) < $numdezenas) {
                $sorteio = rand(1, 60);
                if (!in_array($sorteio, $sorteios)) {
                    $sorteios[] = $sorteio;
                }
            }

            sort($sorteios);

            foreach ($sorteios as $sorteio) {
                echo $sorteio . " ";
            }
        }

        echo "\nO valor total que deve ser pago é R$".$valor_total."\n";
        echo "Saldo restante: R$".$saldo."\n";
    }
}


echo "Jogo encerrado. Seu saldo final é R$".$saldo + $valor_total."\n";