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
    $palpiteNome = 0;
    $palpiteNum = 0;
    $pontos = 0;
    
    
    do {
        echo "\n-------------------MENU------------------\n";
        echo "1- Iniciar Programa, gerar baralho --------\n";
        echo "2- Sortear carta---------------------------\n";
        echo "3- Advinhar carta--------------------------\n";
        echo "4- Pedir dica------------------------------\n";
        echo "5- Desistir--------------------------------\n"; 
        echo "0- SAIR------------------------------------\n";
        $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");
    
        switch ($opcao) {
            case 0:
                 echo "\n FIM DE JOGO! \n";
                break;
            case 1:
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
                echo "Baralho criado\n";
                break;
            case 2:
                if (!empty($baralho)) { /// !empty((!)não vazio(empty) ) é usado para checar se um array tem conteudo ou não, facilita muito já que não preciso encher o cod de if's 
                    $cartaSecreta = $baralho[array_rand($baralho)]; ///vai sortear uma das cartas do array e guardar seus dados na variavel cartabSecreta
                    echo "A carta para adivinhação foi definida!\n";
                }
                else {
                    echo "Você não tem nenhum baralho! Execute a opção 1 do menu para gerar um\n";
                }
                break;
            case 3:                
                if (!empty($baralho)) {
                    imprimirBaralho($baralho); // imprime o baralho
                    sleep(4);
                    
                    $opc = readline("Você deseja tentar adivinhar pelo nome, número, ou ambos?");
                    if ($opc == "nome"||$opc =="Nome"||$opc =="NOME") {
                        $palpiteNome = readline("Qual seu palpite sobre o nome da carta secreta? ");
                        if ($palpiteNome == $cartaSecreta->getNome()){
                            echo "Parabéns, você acertou! a carta secreta é: ".$cartaSecreta."\n";
                            $pontos = $pontos + 10;
                        }
                    }
                    elseif ($opc == "numero"|| $opc == "Número" || $opc =="número"||$opc == "NUMERO"||$opc == "NÚMERO"||$opc == "Numero") {
                        $palpiteNum = readline("Qual seu palpite sobre o número da carta secreta? ");
                        if ($palpiteNum == $cartaSecreta->getNumero()) {
                            echo "Parabéns, você acertou! a carta secreta é: ".$cartaSecreta."\n";
                            $pontos = $pontos + 10;
                        } else {
                            echo "Resposta errada!\n";
                        }
                    }
                    elseif ($opc == "AMBOS"|| $opc == "Ambos"||$opc =="ambos") {
                        $palpiteNome = readline("Qual o seu palpite sobre nome da carta secreta? ");
                        $palpiteNum = readline("Qual seu palpite sobre o número da carta secreta? ");
                        if ($palpiteNome == $cartaSecreta->getNome() && $palpiteNum == $cartaSecreta->getNumero()) {
                            echo "Parabéns, você acertou! a carta secreta é: ".$cartaSecreta."\n";
                            $pontos = $pontos + 50;
                        } elseif ($palpiteNome == $carta->getNome() && $palpiteNum != $carta->getNumero() || $palpiteNome != $carta->getNome() && $palpiteNum == $carta->getNumero()) {
                            echo "Você acertou apenas um dos dois, tente novamente! \n";
                            $pontos = $pontos + 5;
                        }

                    }
                     else{
                        "Resposta inválida, escreva corretamente!\n";
                         
                     }

                } else {
                    echo "Baralho vazio! Por favor, inicie o programa primeiro.\n";
                
                }
                break;
            case 4:
                    
                break;
            case 5:
                break;
    
            default:
                
                break;
        }
    } while ($opcao != 0);
   