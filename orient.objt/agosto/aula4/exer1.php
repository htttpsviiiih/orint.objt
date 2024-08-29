<?php 

    class Escola{
        private $nome;
        private $endereco;
        private $quantidade;

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of quantidade
         */
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade($quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }
        public function __toString()
        {
            $dado = sprintf("\n===========================ESCOLA CADASTRADA==============================\n\nNome: %s\n-----------------------------------------------------------------------------\nEndereço: %s\n-----------------------------------------------------------------------------\nNúmero de estudantes: %d\n==============================================================================\n", 
                $this->nome, 
                $this->endereco, 
                $this->quantidade);

                return $dado;
        }
    }
        $escolas = [];
        for ($i=1; $i <5; $i++) { 
            $escola = new Escola();
            echo "\n======================== _Cadastro de escolas_ ================================\n";
            echo "escola: ".$i."\n";
            $nome = readline("Digite o nome da escola: ");
            $escola->setNome($nome);
            echo "-----------------------------------------------------------------------------\n";
            $endereco = readline("Digite o endereço da escola: ");
            $escola->setEndereco($endereco);
            echo "-----------------------------------------------------------------------------\n";
            $quantidade = readline("Digite a quantidade de alunos: ");
            $escola->setQuantidade($quantidade);
            echo "-----------------------------------------------------------------------------\n";
            //echo $escola."\n";

            array_push($escolas,$escola);
            
        }

        foreach ($escolas as $escola) {
            echo $escola;
        }
        
        $maiorEscola = $escolas[0];

        foreach ($escolas as $escola) {
            if ($escola-> getQuantidade() > $maiorEscola->getQuantidade()) {
                $maiorEscola = $escola;
            }
        }
        
        echo "\nA escola com o maior número de estudantes é: " . $maiorEscola->getNome() . " com " . $maiorEscola->getQuantidade() . " estudantes.\n";

















        // $escola1 = $escolas[0];
        // $escola2 = $escolas[1];
        // $escola3 = $escolas[2];
        // $escola4 = $escolas[3];

        // if ($escola1->getQuantidade() > $escola2->getQuantidade() && $escola1->getQuantidade() > $escola3->getQuantidade() && $escola1->getQuantidade() > $escola4->getQuantidade()) {
        //     echo "A escola com o maior número de estudantes é: " . $escola1;
        // } elseif ($escola2->getQuantidade() > $escola3->getQuantidade() && $escola2->getQuantidade() > $escola4->getQuantidade() && $escola2->getQuantidade() > $escola1->getQuantidade()) {
        //     echo "A escola com o maior número de estudantes é: " . $escola2;
        // } elseif ($escola3->getQuantidade() > $escola4->getQuantidade() && $escola3->getQuantidade() > $escola1->getQuantidade() && $escola3->getQuantidade() > $escola2->getQuantidade()) {
        //     echo "A escola com o maior número de estudantes é: " . $escola3;
        // } else {
        //     echo "A escola com o maior número de estudantes é: " . $escola4;
        // }
        // if ($escola1->getQuantidade() < $escola2->getQuantidade() && $escola1->getQuantidade() < $escola3->getQuantidade() && $escola1->getQuantidade() < $escola4->getQuantidade()) {
        //     echo "A escola com o menor número de estudantes é: " . $escola1;
        // } elseif ($escola2->getQuantidade() < $escola3->getQuantidade() && $escola2->getQuantidade() < $escola4->getQuantidade() && $escola2->getQuantidade() < $escola1->getQuantidade()) {
        //     echo "A escola com o menor número de estudantes é: " . $escola2;
        // } elseif ($escola3->getQuantidade() < $escola4->getQuantidade() && $escola3->getQuantidade() < $escola1->getQuantidade() && $escola3->getQuantidade() < $escola2->getQuantidade()) {
        //     echo "A escola com o menor número de estudantes é: " . $escola3;
        // } else {
        //     echo "A escola com o menor número de estudantes é: " . $escola4;
        // }
