<?php 

    class Produto{
        private string $descricao;
        private string $medida;
        private float $valorUnitario;
        private int $quantidade;
        


        /**
         * Get the value of descricao
         */
        public function getDescricao(): string
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of medida
         */
        public function getMedida(): string
        {
                return $this->medida;
        }

        /**
         * Set the value of medida
         */
        public function setMedida(string $medida): self
        {
                $this->medida = $medida;

                return $this;
        }

        /**
         * Get the value of valorUnitario
         */
        public function getValorUnitario(): float
        {
                return $this->valorUnitario;
        }

        /**
         * Set the value of valorUnitario
         */
        public function setValorUnitario(float $valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

                return $this;
        }

         /**
         * Get the value of quantidade
         */
        public function getQuantidade(): int
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade(int $quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        //////////////////METODOS////////////////////

        public function getvalorTotal(): float
        {
            $calc = $this->valorUnitario * $this->quantidade;
            return round($calc, 2);
        }
    
        public function __toString()
        {
             $dado = sprintf("\nDescrição: %s\nMedida: %s\nValor Unitário: %.2f\nQuantidade Desejada: %d\nValor Total: %.2f", 
                $this->descricao, 
                $this->medida, 
                $this->valorUnitario, 
                $this->quantidade, 
                $this->getvalorTotal());

            return $dado;

        }
    }
    echo "\n======================== _Adicionar Produtos no estoque_ ================================\n";
    $produtos = array();
    for ($i = 1; $i <= 3 ; $i++) { 
        $produto = new Produto();
        echo "Produto: " . $i . "\n";
        $descricao = readline("Descreva o produto que você deseja adicionar ao estoque: ");
        $produto->setDescricao($descricao);
        echo "-----------------------------------------------------------------------------\n";
        $medida = readline("Digite a unidade de medida desse produto (M/KG/G/L): ");
        $produto->setMedida($medida);
        echo "-----------------------------------------------------------------------------\n";
        $valorUnitario = readline("Digite o preço único do produto: ");
        $produto->setValorUnitario($valorUnitario);
        echo "-----------------------------------------------------------------------------\n";
        $quantidade = readline("Digite a quantidade a ser armazenada: ");
        $produto->setQuantidade($quantidade);
        echo "-----------------------------------------------------------------------------\n";
        echo "Valor Total: " . $produto->getvalorTotal() . "\n";
        echo "-----------------------------------------------------------------------------\n";
        echo $produto."\n";
    
        array_push($produtos, $produto);
    }   
    
    $produto1 = $produtos[0];
    $produto2 = $produtos[1];
    $produto3 = $produtos[2];
    
    // Encontrando o produto com o maior valor total
    if ($produto1->getvalorTotal() > $produto2->getvalorTotal() && $produto1->getvalorTotal() > $produto3->getvalorTotal()) {
        echo "O carregamento mais caro foi do produto: " . $produto1;
    } elseif ($produto2->getvalorTotal() > $produto3->getvalorTotal() && $produto2->getvalorTotal() > $produto1->getvalorTotal()) {
        echo "O carregamento mais caro foi do produto:  " . $produto2;
    } elseif ($produto3->getvalorTotal() > $produto2->getvalorTotal() && $produto3->getvalorTotal() > $produto1->getvalorTotal()) {
        echo "O carregamento mais caro foi do produto:  " . $produto3;
    }