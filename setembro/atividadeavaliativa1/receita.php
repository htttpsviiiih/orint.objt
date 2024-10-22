<?php

class Receita
{
    private string $descricao;
    private float $valor;

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
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


class Despesa
{
    private string $des;
    private float $val;
    /**
     * Get the value of des
     */
    public function getDes(): string
    {
        return $this->des;
    }

    /**
     * Set the value of des
     */
    public function setDes(string $des): self
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get the value of val
     */
    public function getVal(): float
    {
        return $this->val;
    }

    /**
     * Set the value of val
     */
    public function setVal(float $val): self
    {
        $this->val = $val;

        return $this;
    }
}    $receitas = array();
     $despesas = array();

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
                $receita = new Receita();
                $receita->setDescricao(readline("Declare de onde vem essa receita: "));
                $receita->setValor(floatval(readline("Digite o valor da receita: ")));
                array_push($receitas, $receita);
                break;
            case 2:
                $despesa = new Despesa;
                $despesa-> setDes(readline("Declare com o que você gastou essa receita: "));
                $despesa->setVal(floatval(readline("Digite o valor do gasto: ")));
                array_push($despesas, $despesa);
        
                break;
            case 3:
                    foreach ($receitas as $rec) {
                        echo "-------------------Receitas---------------------\n";
                        echo"Descrição: ".$rec->getDescricao()." \n";
                        echo"Valor: ".$rec->getValor()." \n";
                       
                    }

                break;
            case 4:
                foreach ($despesas as $des) {
                    echo "-------------------Despesas---------------------\n";
                    echo"Descrição: ".$des->getDes()." \n";
                    echo"Valor: ".$des->getVal()." \n";
                }
                break;
            case 5:
                $totalReceitas = 0;
                foreach ($receitas as $rec){
                    $totalReceitas += $rec ->getValor();
                }
                $totalDespesas = 0;
                foreach ($despesas as $des){
                    $totalDespesas += $des ->getVal();
                }
                $saldo = $totalReceitas - $totalDespesas;
                echo"---------------------Valores Sumarizados-----------------------\n";
                echo"Saldo: ".$saldo."\n";
                echo"Total Receitas: ".$totalReceitas."\n";
                echo"Total Despesas: ".$totalDespesas."\n";

                break;
    
            default:
                echo "Opção INVÁLIDA!\n";
                break;
        }
    } while ($opcao != 0);
    