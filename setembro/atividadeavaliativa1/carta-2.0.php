<?php

    class Carta{
        private int $numero;
        private string $nome;
        

        /**
         * Get the value of numero
         */
        public function getNumero(): int
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         */
        public function setNumero(int $numero): self
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }
        public function __toString(): string {
            return "Carta: " . $this->getNome() . " (Número: " . $this->getNumero() . ")"; ///imprime carta secreta 
        }
    }

    function imprimirBaralho($baralho) { ///imrpime o baralho
        echo "----------- BARALHO -----------\n";
        foreach ($baralho as $numero => $carta) {
            echo ($numero+ 1) . "- " . $carta . "\n"; 
        }
    }

    $baralho= [];
    $tentativa = 0;
    $palpiteNome = 0;
    $palpiteNum = 0;
    $pontos = 300;
    $cartaSecreta = 0;
    $dicas = 0;
    $cartasBaralho = [ /// define o número e o nome das cartas
        1 => 'Esqueletos',
        2 => 'Veneno',
        3 => 'Gigante Real',
        4 => 'Mago',
        5 => 'P.E.K.K.A',
        6 => 'Bruxa Sombria',
        7 => 'Rainha Arqueira'
    ];
    $baralho = [];
    foreach ($cartasBaralho as $num => $nome) { //percorre o array definido $cartasBaralho
    $carta = new Carta();
    $carta->setNumero($num); // atribui o numero da carta
    $carta->setNome($nome);     // atribui o nome da carta
    $baralho[] = $carta;        // adiciona as cartas(objeto gerado pelo usuario) ao bralho
   
}   
    $cartaSecreta = $baralho[array_rand($baralho)];

    echo "Esse jogo de cartas é baseado no jogo mobile Clash Royale, caso não tenha conhecimento o suficiente, acesse o link: https://www.deckshop.pro/br/card/list \n";
    sleep(3);
    echo "Você começa com 300 pontos acumulativos, a cada dica são -300 pontos\n";

    do {
        echo "\n-------------------MENU------------------\n";
        echo "1- Exibir Baralho--------------------------\n";
        echo "2- Advinhar carta--------------------------\n";
        echo "3- Pedir dica------------------------------\n";
        echo "4- Exibir pontuação------------------------\n"; 
        echo "5- Desistir--------------------------------\n";
        echo "0- SAIR------------------------------------\n";
        $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");
        
        switch ($opcao) {
            case 0:
                echo "VOCÊ CANCELOU O PROGRAMA! \n";
               
                echo "Pontuação final: ". $pontos. "\n";
                echo "Número de tentativas: ". $tentativa. "\n"; 
                echo "Número de Dicas: ".$dicas. "\n";
                break;
            case 1:
                imprimirBaralho($baralho);
                sleep(6);
                echo "Pontuação inicial: ".$pontos."\n";
                break;
            case 2:
                $tentativa = $tentativa +1;
                $opc = readline("Você deseja tentar adivinhar pelo nome, número, ou ambos? ");
                    if ($opc == "nome"||$opc =="Nome"||$opc =="NOME") {
                        $palpiteNome = readline("Qual seu palpite sobre o nome da carta secreta? ");
                        if ($palpiteNome == $cartaSecreta->getNome()){
                            echo "Parabéns, você acertou! a carta secreta é: ".$cartaSecreta."\n";
                            $pontos = $pontos + 500;
                            echo "Pontuação final: ". $pontos. "\n";
                            echo "Número de tentativas: ". $tentativa. "\n"; 
                            echo "Número de Dicas: ".$dicas. "\n";
                            die;
                        }
                    }
                    elseif ($opc == "numero"|| $opc == "Número" || $opc =="número"||$opc == "NUMERO"||$opc == "NÚMERO"||$opc == "Numero") {
                        $palpiteNum = readline("Qual seu palpite sobre o número da carta secreta? ");
                        if ($palpiteNum == $cartaSecreta->getNumero()) {
                            echo "Parabéns, você acertou! a carta secreta é: ".$cartaSecreta."\n";
                            $pontos = $pontos + 500;
                            echo "Pontuação final: ". $pontos. "\n";
                            echo "Número de tentativas: ". $tentativa. "\n"; 
                            echo "Número de Dicas: ".$dicas. "\n";
                            die;
                        } else {
                            echo "Resposta errada!\n";
                        }
                    }
                    elseif ($opc == "AMBOS"|| $opc == "Ambos"||$opc =="ambos") {
                        $palpiteNome = readline("Qual o seu palpite sobre nome da carta secreta? ");
                        $palpiteNum = readline("Qual seu palpite sobre o número da carta secreta? ");
                        if ($palpiteNome == $cartaSecreta->getNome() && $palpiteNum == $cartaSecreta->getNumero()) {
                            echo "Parabéns, você acertou! a carta secreta é: ".$cartaSecreta."\n";
                            $pontos = $pontos + 1000;
                            echo "Pontuação final: ". $pontos. "\n";
                            echo "Número de tentativas: ". $tentativa. "\n"; 
                            echo "Número de Dicas: ".$dicas. "\n";
                            die;

                        } elseif ($palpiteNome == $carta->getNome() && $palpiteNum != $carta->getNumero() || $palpiteNome != $carta->getNome() && $palpiteNum == $carta->getNumero()) {
                            echo "Você acertou apenas um dos dois, tente novamente! \n";
                            $pontos = $pontos + 500;
                        } else {
                            echo "Você errou! tente novamente";
                        }

                    }
                     else{
                        "Resposta inválida, escreva corretamente!\n";
                         
                     }
                break;
                case 3:
                    if ($pontos > 0) {
                        echo "Você pediu uma dica!\n";
                        $dicas = $dicas +1; //conta quantas dicas o usuario pediu 
                        $pontos = $pontos - 100; // Reduz pontos por pedir uma dica
                
                        // Dica baseada no número da carta secreta
                        if ($cartaSecreta->getNumero() < 4) {
                            echo "Dica sobre o número: O número da carta é menor que 4.\n";
                        } elseif ($cartaSecreta->getNumero() >= 4 && $cartaSecreta->getNumero() <= 6) {
                            echo "Dica sobre o número: O número da carta está entre 4 e 6.\n";
                        } else {
                            echo "Dica sobre o número: O número da carta é maior que 6.\n";
                        }
                
                        // Dica baseada no nome da carta secreta
                        switch ($cartaSecreta->getNome()) {
                            case 'Esqueletos':
                                echo "A carta secreta é da arena comum e tem menos de 100 pontos de vida.\n";
                                break;
                            case 'Veneno':
                                echo "A carta secreta é um feitiço da arena 9 que tem duração de 8 segundos\n";
                                break;
                            case 'Gigante Real':
                                echo "A carta secreta é comum, da arena 7 e tem mais pontos de vida que a Rainha Arqueira\n";
                                break;
                            case 'Mago':
                                echo "A carta secreta é uma carta rara da arena 4 e tem alcance de 5.5\n";
                                break;
                            case 'P.E.K.K.A':
                                echo "A carta secreta é uma carta épica da arena 6 que tem a velocidade de ataque em 1.8\n";
                                break;
                            case 'Bruxa Sombria':
                                echo "A carta secreta tem uma ligação com os morcegos da arena 5\n";
                                break;
                            case 'Rainha Arqueira':
                                echo "A carta secreta é da liga campeã, arena 17\n";
                                break;
                            default:
                                echo "Sem dica disponível para esta carta.\n";
                                break;
                        }
                    } else {
                        echo "Você não tem pontos suficientes para pedir uma dica.\n";
                    }
                    break;
                
            case 4:
                    echo "-------------------------------------PONTUAÇÃO----------------------------------------\n";
                    echo "Sua pontuação é de: ".$pontos. " 4 com: ".$tentativa." tentativas e: ". $dicas." dicas\n";
                    passthru    ('cls');
                break;
            case 5:
                echo "=============Você desisitiu=============\n";
                echo "Pontuação final: ". $pontos. "\n";
                echo "Número de tentativas: ". $tentativa. "\n"; 
                echo "Número de Dicas: ".$dicas. "\n";
                break;
            default:
                echo "Opção INVÁLIDA!\n";
                break;
        }
    } while ($opcao);

    