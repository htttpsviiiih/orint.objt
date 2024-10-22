<?php

    require_once("modelo/Departamento.php");
    require_once("modelo/Funcionario.php");

    $departamento = array();


        echo "----------------------CADASTRO-----------------------------\n";
    for ($i=1; $i <5 ; $i++) {
        
        $funcionario = new Funcionario;
        $funcionario->setNome(readline("Digite o nome do funcionario: " ));
        $funcionario ->setCargo(readline("Digite o cargo do funcionario: "));
        $funcionario->setSalario(readline("Digite o salario do funcionario: "));

        $dpto = new Departamento;
        $dpto->setNome(readline("Digite o nome do departamento deste funcionario: "));
        $dpto->setNumSala(readline("Digite o número da sala: "));

        $funcionario->setDpto($dpto);

        array_push($departamento, $funcionario);
    }
        echo "-------------------------FUNCIONÁRIOS------------------------------\n";

        foreach ($departamento as $chave  => $funcionario) {
            echo "[".$chave = $chave + 1 ."°] Funcionario\n";
            echo "Nome: ".$funcionario->getNome() ."\n";
            echo "Cargo: ".$funcionario->getCargo()."\n";
            echo "Salario: ".$funcionario->getSalario()."\n";
            echo $funcionario ->getDpto();
        echo "----------------------------------------------------------------------\n";
        }