<?php

        class Aluno{
        private $nome;
        private $nota1;
        private $nota2;
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }
        public function getNota1()
        {
                return $this->nota1;
        }
        public function setNota1($nota1): self
        {
                $this->nota1 = $nota1;

                return $this;
        }
        public function getNota2()
        {
                return $this->nota2;
        }
        public function setNota2($nota2): self
        {
                $this->nota2 = $nota2;

                return $this;
        }
}
        for ($i=1; $i <4 ; $i++) { 
        $aluno1 = new Aluno();
        echo"===============================================================\n";
        $nome = readline(" Digite o nome do ".$i."° aluno(a) ");
        $aluno1->setNome($nome); 
        echo "________________________________________________________\n";
        $nota1 = readline(" Digite a primeira nota: ");
        $aluno1->setNota1($nota1);
        echo "________________________________________________________\n";
        $nota2 = readline(" Digite a segunda nota: ");
        $aluno1->setNota2($nota2);
        echo "________________________________________________________\n";
        $media = $nota1/$nota2;
        echo " Aluno: " . $aluno1-> getNome(). " | Média:".$media." \n";
        echo"===============================================================\n";
        
        
}
